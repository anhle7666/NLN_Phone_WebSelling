<?php
class Cash_Controller extends Base_Controller{
    public function index(){
        $this->title='Thanh toán';
         //Lấy sản phẩm
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

        //Lấy thông tin tài khoản
        $SDT=Session::get('SDT');
        $account= $this->model->cart->select("SELECT * FROM tai_khoan WHERE SDT=$SDT;");
        $account=$account[0];
        $this->layout->set('empty');
        $this->view->load('cash', ['data'=>$data, 'account'=>$account]);
    }

    public function createBill(){
        $this->model->load('bill');
        $SDT=Session::get('SDT');
        $account= $this->model->bill->select("SELECT * FROM tai_khoan WHERE SDT=$SDT;");
        $account=$account[0];
        if($_POST['diaChi']!=$account['diaChi']||$_POST['hoTen']!=$account['hoTen']||$_POST['email']!=$account['email']){
            $this->model->bill->update('tai_khoan',[
                'diaChi'=>$_POST['diaChi'],
                'hoTen'=>$_POST['hoTen'],
                'email'=>$_POST['email']
            ], "SDT=$SDT");
            $account['diaChi']=$_POST['diaChi'];
            $account['hoTen']=$_POST['hoTen'];
            $account['email']=$_POST['email'];
        }
        //Tạo bill
        $data=$account;
        $data['phuongThucTT']=$_POST['paymentMethod'];
        $data['phiVC']=$_POST['phiVC'];
        $this->model->bill->createBill($data);

        //Set bill
        $dataDetail=$this->model->bill->select("SELECT gh.*, ct.SL FROM gio_hang gh JOIN chi_tiet_sp ct ON gh.idSP=ct.idSP AND gh.idMau=ct.idMau AND gh.idRam=ct.idRam AND gh.idBoNho=ct.idBoNho WHERE SDT='$SDT';");
        $idHD=$this->model->bill->select("SELECT MAX(idHD) idHD FROM hoa_don WHERE idTK=$SDT GROUP BY idTK;");
        $idHD=$idHD[0]['idHD'];
        for($i=0;$i<sizeof($dataDetail);$i++){
            $dataDetail[$i]['thue']=$_POST['thue'];
            $dataDetail[$i]['idHD']=$idHD;
            $dataDetail[$i]['giaBan']=$_POST["$i"];
            unset($dataDetail[$i]['SDT']);
        }
        $this->model->bill->setBill($dataDetail);  
        
        //Xóa giỏ hàng
        $this->model->bill->delete('gio_hang', "SDT=$SDT");

        //Chuyển hướng sang trạng thái đơn hàng:
        header("Location: ?module=bill&action=index");
    }
}