<?php
class viewsdemoController implements IController{
    private $nameView;
    public function viewsdemoAction(){
        $this->nameView = new DemoView();
        $result = $this->nameView->render('../html/themes-1/theme-1#ht5.html');
        return $result;
    }
}
?>

