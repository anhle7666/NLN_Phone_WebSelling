<?php
class Account_Model extends Base_Model{
    public function checkSignIn($user, $pass){
        $query="SELECT * FROM tai_khoan WHERE SDT=? AND MK=?";
        $pass=md5($pass);
        return $this->affectedRows($query, [$user, $pass]);
    }
    public function signIn($user, $pass){    
        return $this->select("SELECT * FROM tai_khoan WHERE SDT=$user AND MK=md5($pass)");
    }

    public function register($user, $pass){
        $pass=md5($pass);
        return $this->insert('tai_khoan', ['SDT'=>$user, 'MK'=>$pass, 'loaiTK'=>1, 'trangThai'=>0]);
    }
}