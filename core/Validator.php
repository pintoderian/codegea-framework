<?php
namespace Core;

use Core\Session;
use Symfony\Component\Security\Csrf\CsrfTokenManager;
use Symfony\Component\Security\Csrf\CsrfToken;
use Core\Response;

class Validator{
    
    public static function request($request, $arr = []){
        if($request->getMethod() == 'POST' || $request->getMethod() == 'PUT'){
            // =====================================================================
            // Check csrf enabled
            // =====================================================================
            $csrf = app('csrf-token');
            if($csrf){
                $token = $request->get('_token') ? $request->get('_token') : $request->headers->get('X-CSRF-Token');
                if(!isset($token)){
                    throw new \Exception('csrf-token is enabled');
                }elseif($token == '' && $token == NULL){
                    throw new \Exception('Token is null');
                }
            }else{
                $token = NULL;
            }
            // =====================================================================
            // Validate token
            // =====================================================================
            if($csrf == true && $token!=NULL){
                $easyCSRF = new CsrfTokenManager();
                $get_Token = new CsrfToken('_token', $token);
                if($easyCSRF->isTokenValid($get_Token)){
                    if(!$request->isAjax()):
                        $easyCSRF->refreshToken('_token');
                    endif;
                }else{
                    throw new \Exception('Invalid CSRF token');
                }
            }
            // =================================================================
            // Request validate
            // =================================================================
            foreach ($arr as $key => $value) {
                // =============================================================
                // Check values
                // =============================================================
                self::check_values($key, $value, $request);
            }
        }
    }

    private static function check_values($key, $value, $request){
        $session = new Session;
        $data = explode('|', $value);
        $errors = [];
        for ($i=0; $i < count($data); $i++) {
            $input = $request->get($key); 
            $type = explode(':', $data[$i]);
            if($data[$i] == 'required'){
                // =================================================================
                // Required value
                // =================================================================
                if($input == '' && $input == NULL){
                    $errors[$key] = 'This '.$key.' is required';
                    $session->set('errors', $errors);
                    if(!$request->isAjax()): break; endif;
                }
            }elseif($type[0] == 'max'){
                // =============================================================
                // Max string, number value
                // =============================================================
                if(is_numeric($input)){
                    if($input > $type[1]){
                        $errors[$key] = 'This '.$key.' number is maximum '.$type[1];
                        $session->set('errors', $errors);
                        if(!$request->isAjax()): break; endif;
                    }
                }elseif(is_string($input)){
                    if(strlen($input) > $type[1]){
                        $errors[$key] = 'This '.$key.' string is maximum '.$type[1];
                        $session->set('errors', $errors);
                        if(!$request->isAjax()): break; endif;
                    }
                }
            }elseif($type[0] == 'min'){
                // =============================================================
                // Min string, number value
                // =============================================================
                if(is_numeric($input)){
                    if($input < $type[1]){
                        $errors[$key] = 'This '.$key.' number is minimum '.$type[1];
                        $session->set('errors', $errors);
                        if(!$request->isAjax()): break; endif;
                    }
                }elseif(is_string($input)){
                    if(strlen($input) < $type[1]){
                        $errors[$key] = 'This '.$key.' string is minimum '.$type[1];
                        $session->set('errors', $errors);
                        if(!$request->isAjax()): break; endif;
                    }
                }
            }elseif($type[0] == 'email'){
                if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
                    $errors[$key] = 'This '.$key.' is considered invalid email';
                    $session->set('errors', $errors);
                    if(!$request->isAjax()): break; endif;
                }
            }elseif($type[0] == 'array'){
                if(!is_array($input)){
                    $errors[$key] = 'This '.$key.' is considered invalid array';
                    $session->set('errors', $errors);
                    if(!$request->isAjax()): break; endif;
                }
            }elseif($type[0] == 'unique'){
                $db = explode(',', $type[1]);
                $className = ucfirst($db[0]);
                if(class_exists('\\App\\Models\\'.$className)){
                    $ref = '\\App\\Models\\'.$className;
                    if(!isset($db[2])){
                        if ($ref::where($db[1], '=', "{$input}")->exists()) {
                            $errors[$key] = "This {$db[1]} exists";
                            $session->set('errors', $errors);
                            if(!$request->isAjax()): break; endif;
                        }
                    }else{
                        // =====================================================
                        // Update check id value
                        // =====================================================
                        if (!$ref::where('id', '=', "{$db[2]}")->exists()) {
                            $errors[$key] = "This id:{$db[2]} not exists";
                            $session->set('errors', $errors);
                            if(!$request->isAjax()): break; endif;
                        }else{
                            if ($ref::where($db[1], '=', "{$input}")->where('id', '!=', "{$db[2]}")->exists()) {
                                $errors[$key] = "This {$db[1]} exists";
                                $session->set('errors', $errors);
                                if(!$request->isAjax()): break; endif;
                            }
                        }
                    }
                }else{
                    $errors[$key] = 'This class not exists';
                    $session->set('errors', $errors);
                    if(!$request->isAjax()): break; endif;
                }
            }
            // =================================================================
            // Return error javascript
            // =================================================================
            if(!empty($errors)){
                if($request->isAjax()):
                    http_response_code(403);
                    die(json_encode($errors));
                endif;
            }
        }
    }
}