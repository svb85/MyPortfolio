<?php
set_include_path (get_include_path()
                    .PATH_SEPARATOR.'application/Controller'
                    .PATH_SEPARATOR.'application/Models'
                    .PATH_SEPARATOR.'application/Views'
                    .PATH_SEPARATOR.'application/html'
                    .PATH_SEPARATOR.'application/Route');
function __autoload($class){
          require_once $class.'.php';
}
class FrontSettingController{
    protected static $_instance;
    private $_action;
    public static function getInstance(){
        if(!(self::$_instance instanceOf self))
		   self::$_instance = new self();
		 return self::$_instance;
    }
    
    private function __construct() {
        $Route = new Route();
        $name = $Route->init();
        $this->_action = $name[1];
        $this->route($name[0]);
    }
    
    private function route($nameCont){
        if(class_exists($nameCont)){
            $rc = new ReflectionClass($nameCont);
                if($rc->implementsInterface('IController')){
                    if($rc->hasMethod($this->_action)){
                        $controller = $rc->newInstance();
                        $method = $rc->getMethod($this->_action);
                        $method->invoke($controller);
                    }else{
                        throw new Exception('Wrong Action');
                    }
		}else{
                    throw new Exception('Wrong Interface');
		}
	}else{
            throw new Exception('Wrong Controller');
	}
    }
    
    private function __clone(){
    }
    
    private function __wakeup() {
    }
}
?>