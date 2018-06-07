<?php
use Bramus\Router\Router;
class Route extends Router{
	
	public function group($route, $params) {
		$this->mount($route, $params);
	}

	public function error($params) {
		$this->set404($params);
	}

	public function redirect($url, $permanent = false){
		if (headers_sent() === false):
			header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
		endif;
		exit();
	}
	
	public function middleware($pattern = NULL, $fn = NULL){
		$uri = $this->getCurrentUri();
		if(strpos($pattern, '*') !== false){
			$pattern = str_replace('*', '', $pattern);
			if(strpos($uri, $pattern) !== false){
				$this->invokeController($pattern, $fn, $uri);
			}
		}else{
			if($uri == $pattern){
				$this->invokeController($pattern, $fn, $uri);
			}
		}
		
	} 
	
	private function invokeController($pattern, $fn, $uri){
		if (is_callable($fn)) {
			call_user_func_array($fn, []);
		}else{
			$pattern = preg_replace('/{([A-Za-z]*?)}/', '(\w+)', $pattern);
			if (preg_match_all('#^'.$pattern.'$#', $uri, $matches, PREG_OFFSET_CAPTURE)) {
				if (stripos($fn, '@') !== false) {
					list($controller, $method) = explode('@', $fn);
					$controller = 'App\\Middleware\\'.$controller;
					if (class_exists($controller)) {
						if (call_user_func_array(array(new $controller(), $method), []) === false) {
							if (forward_static_call_array(array($controller, $method), []) === false);
						}
					}
				}
			}
		}
	}
}