<?php
class Cart_Controller extends Base_Controller
{
    public function index()
    {   
        if (Session::get('login') == false) {
            Session::destroy();
            Session::init();
            Session::set('url', "/Quan_Ly_Ban_Hang/?module=cart&action=index");
            header("Location: ?module=account&action=index");
        }
        $this->title = 'Giỏ hàng';
        $this->model->load('cart');
        $data = $this->model->cart->load();
        $result= $this->model->cart->select("SELECT sp.idSP, sum(km.heSoGiam) tongGiam FROM san_pham sp INNER JOIN chuong_trinh_khuyen_mai ct ON sp.idSP=ct.idSP INNER JOIN khuyen_mai km ON ct.idKM=km.idKM WHERE km.idLoaiKM=1 AND km.BD<CURRENT_DATE() AND km.KT>CURRENT_DATE() GROUP BY sp.idSP;");
        $promotion=[];
        foreach($result as $re){
            $promotion[$re['idSP']]=$re['tongGiam'];
        }
        foreach($data as $key=>$val){
            $data[$key]['tongGiam']=isset($promotion[$val['idSP']])?$promotion[$val['idSP']]:0;
        }
        if (isset($_POST['delete'])) {
            if ($_POST['delete'] == -1) {
                $data[$_POST['index']]['SLMua'] = $_POST[$_POST['index']];
                $this->model->cart->changeSL([
                    'SDT' => Session::get('SDT'),
                    'idSP' => $data[$_POST['index']]['idSP'],
                    'idRam' => $data[$_POST['index']]['idRam'],
                    'idBoNho' => $data[$_POST['index']]['idBoNho'],
                    'idMau' => $data[$_POST['index']]['idMau'],
                    'SLMua' => $data[$_POST['index']]['SLMua']
                ]);
            } else {
                $this->model->cart->del([
                    'SDT' => Session::get('SDT'),
                    'idSP' => $data[$_POST['delete']]['idSP'],
                    'idRam' => $data[$_POST['delete']]['idRam'],
                    'idBoNho' => $data[$_POST['delete']]['idBoNho'],
                    'idMau' => $data[$_POST['delete']]['idMau']
                ]);
                unset($data[$_POST['delete']]);
            }
        }
        $this->view->load('cart', $data);
    }
}
