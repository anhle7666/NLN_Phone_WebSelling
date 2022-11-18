<?php
class Home_Controller extends Base_Controller{
    public function index(){        
        $this->model->load("product");
        $products =$this->model->product->getProduct();
        $categorys=$this->model->product->select("SELECT * FROM danh_muc");
        $data=[
            'categorys'=>$categorys,
            'products'=>$products
        ];      
        $result=$this->model->product->getPromotion();
        $promotion=[];
        foreach($result as $re){
            $promotion[$re['idSP']]=$re;
        }
        $data['promotion']=$promotion;
        $this->view->load('products',$data);
    }
}