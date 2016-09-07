<?php
class Route {
    protected $_url;
            
    function __construct(){
        $req_url = $_SERVER['REQUEST_URI'];
        $this->_url = explode('/',trim($req_url,'/'));
    }
    
    function init(){
        $nameC = $this->_url[0];
        
        if(class_exists($nameC)){
            $cl = new $nameC();
            $name = $cl->nameParse();
            return $name;
        }else{
            $cl = new def();
            $name = $cl->nameParse();
            return $name;
        }
    }
}
?>