<?php
class LoadClass{
	private $instance = null;
    private $_returns = [];
	public function __construct(){
		$pars = func_get_args();
		$this->instance = is_object($obj=array_shift($pars))?$obj:new $obj($pars);
	}
	public function __call($n,$p){
		($r=call_user_func_array([$this->instance,$n],$p))?$this->_returns[]=$r:null;
		return $this;
	}
}