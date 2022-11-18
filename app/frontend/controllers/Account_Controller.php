<?php
class Account_Controller extends Base_Controller{
    public function index(){
        $this->signInPage();
    }

    public function signInPage(){
        $this->title="Đăng nhập";
        $this->layout->set('empty');
        $this->view->load('signIn');
    }
    public function signIn(){
        $this->model->load('account');
        $row=$this->model->account->checkSignIn($_POST['SDT'], $_POST['MK']);
        if($row==0)header("Location: ?module=account&action=index");
        else {
            $result=$this->model->account->signIn($_POST['SDT'], $_POST['MK']);
            Session::init();
            Session::set('login', true);
            Session::set('SDT', $result[0]['SDT']);
            Session::set('ten', $result[0]['hoTen']);
            if($result[0]['loaiTK']==0){
                Session::set('admin', true);
                header("Location: ?module=admin&action=index");
            }
            else if(Session::get('url')==false)header("Location: ?module=home&action=index");
            else header("Location: ".Session::get('url'));
        }
    }
     
    public function registerPage(){
        $this->title="Đăng ký";
        $this->layout->set('empty');
        $this->view->load('register');
    }
    public function register(){
        $this->model->load('account');
        if(strlen($_POST['SDT'])!=10)return header("Location: ?module=account&action=registerPage");
        $row=$this->model->account->affectedRows("SELECT * FROM tai_khoan WHERE SDT=?", [$_POST['SDT']]);
        if($row>0)return header("Location: ?module=account&action=registerPage");
        if($_POST['MK']!=$_POST['RMK'])return header("Location: ?module=account&action=registerPage");
        $state=$this->model->account->register($_POST['SDT'],$_POST['MK']);
        if(!$state) return header("Location: ?module=account&action=registerPage");
        else return header("Location: ?module=account&action=index");
    }

    public function signOut(){
        Session::init();
        Session::destroy();
        header("Location:?module=home&action=index");
    }

    public function updateProfile(){
        Session::checkSesion();
        $this->model->load('account');
        $SDT=Session::get('SDT');
        $data=$this->model->account->select("SELECT * FROM tai_khoan WHERE SDT=$SDT");
        $data=$data[0];
        if(isset($_POST['update'])){
            $data['hoTen']=$_POST['hoTen'];
            $data['diaChi']=$_POST['diaChi'];
            $data['email']=$_POST['email'];
            $this->model->account->update('tai_Khoan', $data, "SDT=$SDT");
            Session::set('ten', $data['hoTen']);
        }
        $this->view->load('profile', $data);
    }
}