<?php
class defaultController implements IController{
    private $nameView;
    public function defaultAction(){
        $this->nameView = new DefaultView();
        $result = $this->nameView->render('../html/index.html');
        return $result;
    }
}
?>