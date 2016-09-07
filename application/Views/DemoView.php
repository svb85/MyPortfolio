<?php
class DemoView{
    public function render($pageName){
        include (dirname(__FILE__).'/'.$pageName);
    }
}
?>

