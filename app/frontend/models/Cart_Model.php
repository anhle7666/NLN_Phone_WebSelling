<?php
class Cart_Model extends Base_Model{
    // kiểm tra sản phẩm đã tồn tại chưa
    public function check($cond){
        $query="SELECT * FROM gio_hang WHERE $cond";
        return sizeof($this->select($query));
    }
    public function add($data=[]){         
        $cond="";    
        foreach($data as $key=>$val)if($key!='SLMua'){
            $cond.="$key=$val AND ";
        }
        $cond=rtrim($cond, " AND ");
        $row = $this->check($cond);
        return $row==0 ? $this->insert("gio_hang", $data):$this->update('gio_hang', ['SLMua'=>$data['SLMua']+1], $cond);
    }
    public function changeSL($data=[]){
        $cond="";    
        foreach($data as $key=>$val)if($key!='SLMua'){
            $cond.="$key=$val AND ";
        }
        $cond=rtrim($cond, " AND ");
        return $this->update('gio_hang', ['SLMua'=>$data['SLMua']], $cond);
    }
    public function del($data=[]){
        $cond="";
        foreach($data as $key=>$val){
            $cond.="$key=$val AND ";
        }
        $cond=rtrim($cond, " AND ");
        return $this->delete('gio_hang',$cond);
    }

    public function load(){
        $SDT=Session::get('SDT');
        $query="SELECT * FROM gio_hang gh INNER JOIN chi_tiet_sp ctsp ON gh.idSP=ctsp.idSP AND gh.idMau=ctsp.idMau AND gh.idRam=ctsp.idRam AND gh.idBoNho=ctsp.idBoNho 
        INNER JOIN san_pham sp ON gh.idSP=sp.idSP INNER JOIN ram ON gh.idRam=ram.idRam INNER JOIN bo_nho ON gh.idBoNho=bo_nho.idBoNho INNER JOIN mau ON gh.idMau=mau.idMau AND gh.idSP=mau.idSP INNER JOIN anh ON gh.idMau=anh.idMau AND gh.idSP=anh.idSP 
        WHERE SDT=$SDT AND idAnh=1;";
        return $this->select($query);
    }
    
}