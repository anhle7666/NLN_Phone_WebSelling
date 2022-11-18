<?php
class Category_Model extends Base_Model{
    protected $table="san_pham";
    public function getAllCategory(){
        $query="SELECT * FROM danh_muc d INNER JOIN san_pham s ON d.idDM=s.idDM INNER JOIN anh ON s.idSP=anh.idSP WHERE idAnh=1;";
        return $this->select($query);        
    }

    public function getTitleCategory(){
        $query="SELECT * FROM danh_muc;";
        return $this->select($query);        
    }

    
}