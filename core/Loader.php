<?php
class Loader{
    private static $dir = null;
    public static function folder($dir = NULL){
        self::$dir = $dir.'/';
        if(isset(self::$dir)){
            if (is_dir(self::$dir)) {
                foreach(new DirectoryIterator(self::$dir) as $file ) {
                    if (!$file->isDot()) {
                        if ($file->isDir()) {
                            self::folder($file->getPathname());
                        }
                        if(strpos($file->getFilename(), '.php') !== false){
                            require_once $file->getPathname(); 
                        }
                    }
                }
            }
        }
    }   

    public static function file($file = null){
        if(isset($file)){
            $file = $file.'.php';
            if(is_file($file)){
                return require_once $file;
            }
        }
    }

}




