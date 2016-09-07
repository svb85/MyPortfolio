<?php
class DefaultView{
    public function render($pageName){
        include (dirname(__FILE__).'/'.$pageName);
    }
}
?>
