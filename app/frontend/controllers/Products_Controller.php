<?php
class Products_Controller extends Base_Controller{
    public function show($idDM=null){
        $this->title='Sản Phẩm';
        $this->model->load("product");
        //Tạo điều kiện lọc
        $cond=$idDM!=null?"sp.idDM=$idDM":"1";
        $cond=isset($_POST['search'])?"sp.tenSP LIKE '%{$_POST['search']}%'":$cond;

        $products =$this->model->product->getProduct($cond);
        $categorys=$this->model->product->select("SELECT * FROM danh_muc");
        $data=[
            'categorys'=>$categorys,
            'products'=>$products
        ];      
        if(isset($_POST['search']))$this->search=$_POST['search'];
        $result=$this->model->product->getPromotion();
        $promotion=[];
        foreach($result as $re){
            $promotion[$re['idSP']]=$re;
        }
        $data['promotion']=$promotion;
        $this->view->load('products',$data);
    }

    public function showDetail($idSP){
        $this->title='Chi tiết sản phẩm';
        $this->model->load("product");
        $data['detail'] =$this->model->product->getDetail($idSP);
        $data['anh']=$this->model->product->getImages($idSP);
        $data['memory']=$this->model->product->getMemory($idSP);
        $data['selectMemory']=isset($_POST['options'])?$_POST['options']:0;
        $data['mau']=$this->model->product->getColor($idSP, $data['memory'][$data['selectMemory']]['idRam'], $data['memory'][$data['selectMemory']]['idBoNho']);        
        $data['selectColor']=isset($_POST['options_color'])?$_POST['options_color']:0;
        if(!isset($data['mau'][$data['selectColor']]))$data['selectColor']=0;
        $data['promotion']=$this->model->product->getPromotion($idSP);
        if(isset($_POST['add'])){
            Session::init();
            if(Session::get('login')==false){
                Session::destroy();
                Session::set('url', $_SERVER['REQUEST_URI']);
                header("Location: ?module=account&action=index");
            }
            else{
                $this->model->load("cart");
                $cart=[
                    'SDT'=>Session::get('SDT'),
                    'idSP'=>$idSP,
                    'idRam'=>$data['memory'][$data['selectMemory']]['idRam'],
                    'idBoNho'=>$data['memory'][$data['selectMemory']]['idBoNho'],
                    'idMau'=>$data['mau'][$data['selectColor']]['idMau'],
                    'SLMua'=>1
                ];
                $this->model->cart->add($cart);
                header("Location: ?module=cart&action=index");
            }
        }else $this->view->load('detail',$data);
    }
}