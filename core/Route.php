<?php
class Route{
	protected static $instance;
	private $router;
	protected static function initialize() {
			static::$instance = new static();
			static::$instance->router = new Bramus\Router\Router();
	}
	// ===========================================================================
	// DEFINIENDO METODOS DE RUTAS DE BRAMUS
	// ===========================================================================
	public static function get($route, $params) {
			$instance = static::getInstance();
			$instance->router->get($route, $params);
	}
	public static function group($route, $params) {
			$instance = static::getInstance();
			$instance->router->mount($route, $params);
	}
	public static function post($route, $params) {
			$instance = static::getInstance();
			$instance->router->post($route, $params);
	}
	public static function put($route, $params) {
			$instance = static::getInstance();
			$instance->router->put($route, $params);
	}
	public static function delete($route, $params) {
			$instance = static::getInstance();
			$instance->router->delete($route, $params);
	}
	public static function options($route, $params) {
			$instance = static::getInstance();
			$instance->router->options($route, $params);
	}
	public static function patch($route, $params) {
			$instance = static::getInstance();
			$instance->router->patch($route, $params);
	}
	public static function match($methods, $route, $params) {
			$instance = static::getInstance();
			$instance->router->match($methods, $route, $params);
	}
	public static function error($params) {
			$instance = static::getInstance();
			$instance->router->set404($params);
	}
	public static function redirect($url, $permanent = false){
			if (headers_sent() === false):
				header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
			endif;
			exit();
	}
	// ===========================================================================
	// FINALIZAMOS LOS METODOS
	// ===========================================================================
	public static function getInstance() {
			if (is_null(static::$instance)) {
				static::initialize();
			}
			return static::$instance;
	}
	public static function run(){
			$instance = static::getInstance();
			$instance->router->run();
	}
	// ============================================================================
 	// Middleware
	 // ============================================================================
	public static function middleware($methods, $route, $params){
			$instance = static::getInstance();
			$instance->router->before($methods, $route, $params);
	} 
}