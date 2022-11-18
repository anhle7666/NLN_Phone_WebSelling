<?php
class Other_Controller extends Base_Controller{
    public function promotions(){
        $this->title="Khuyến mãi";
        $this->view->load('promotions');
    }

    public function styles(){
        $this->title="Xu hướng";
        $this->view->load('styles');
    }
}