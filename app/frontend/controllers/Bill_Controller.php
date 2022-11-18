<?php
class Bill_Controller extends Base_Controller{
    public function index($status=null){if($status==5)$status="0";
        $this->title="Đơn hàng";
        $this->model->load('bill');
        $data=$this->model->bill->load($status); //var_dump($data);        
        $this->view->load('statusOrder', $data);
    }
}