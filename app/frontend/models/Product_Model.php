<?php
class Product_Model extends Base_Model{
    public function getAllProduct(){
        $query="SELECT * FROM  san_pham s ON d.idDM=s.idDM INNER JOIN mau m ON s.idSP=m.idSP 
        INNER JOIN anh ON s.idSP=anh.idSP INNER JOIN chi_tiet_sp c ON s.idSP=c.idSP INNER JOIN ram ON c.idRam=ram.idRam 
        INNER JOIN bo_nho b ON c.idBoNho=b.idBoNho LEFT JOIN 
        (SELECT idSP, km.*, sum(heSoGiam) tongKM FROM khuyen_mai km INNER JOIN chuong_trinh_khuyen_mai ctkm ON km.idKM=ctkm.idKM WHERE km.idLoaiKM=1 AND CURRENT_DATE()<KT GROUP BY idSP) k 
        ON s.idSP=k.idSP GROUP BY s.idSP;";
        return $this->select($query);        
    }

    public function getProduct($cond=1){
        $query="SELECT * FROM san_pham sp INNER JOIN chi_tiet_sp ct ON sp.idSP=ct.idSP 
        INNER JOIN ram ON ct.idRam=ram.idRam INNER JOIN bo_nho ON ct.idBoNho=bo_nho.idBoNho 
        INNER JOIN mau ON sp.idSP=mau.idSP INNER JOIN anh ON mau.idSP=anh.idSP AND mau.idMau=anh.idMau WHERE $cond GROUP BY sp.idSP;";
        return $this->select($query);
    }
    

    public function getProductInCategory($idDM){
        $query="SELECT * FROM danh_muc d INNER JOIN san_pham s ON d.idDM=s.idDM INNER JOIN mau m ON s.idSP=m.idSP INNER JOIN anh ON s.idSP=anh.idSP INNER JOIN chi_tiet_sp c ON s.idSP=c.idSP INNER JOIN ram ON c.idRam=ram.idRam INNER JOIN bo_nho b ON c.idBoNho=b.idBoNho WHERE idDM=$idDM GROUP BY s.idSP;";
        return $this->select($query);        
    }

    public function getDetail($idSP){
        $query="SELECT * FROM san_pham s INNER JOIN chi_tiet_sp c ON s.idSP=c.idSP INNER JOIN ram ON c.idRam=ram.idRam INNER JOIN bo_nho b ON c.idBoNho=b.idBoNho INNER JOIN hdh ON s.idHDH=hdh.idHDH WHERE s.idSP=$idSP;";
        return $this->select($query);
    }
    public function getMemory($idSP){
        $query="SELECT * FROM chi_tiet_sp c INNER JOIN ram ON c.idRam=ram.idRam INNER JOIN bo_nho b ON c.idBoNho=b.idBoNho WHERE idSP=$idSP GROUP BY c.idRam, c.idBoNho;";
        return $this->select($query);
    }
    public function getColor($idSP, $idRam, $idBoNho){
        $query="SELECT * FROM chi_tiet_sp c INNER JOIN mau m ON c.idMau=m.idMau AND c.idSP=m.idSP WHERE c.idSP=$idSP AND c.idRam=$idRam AND c.idBoNho=$idBoNho;";
        return $this->select($query);
    }
    public function getPromotion($idSP=null){
        if($idSP!=null) $query="SELECT km.*, sum(heSoGiam) tongGiam FROM chuong_trinh_khuyen_mai ct INNER JOIN khuyen_mai km ON ct.idKM=km.idKM WHERE km.idLoaiKM=1 AND ct.idSP=$idSP AND CURRENT_DATE()<km.KT GROUP BY idSP";
        else $query="SELECT idSP, km.*, sum(heSoGiam) tongGiam FROM chuong_trinh_khuyen_mai ct INNER JOIN khuyen_mai km ON ct.idKM=km.idKM WHERE km.idLoaiKM=1 AND CURRENT_DATE()<km.KT GROUP BY idSP";
        return $this->select($query);        
    }

    public function getImages($idSP){        
        $query="SELECT * FROM san_pham s INNER JOIN anh ON s.idSP=anh.idSP WHERE s.idSP=$idSP;";
        return $this->select($query);
    }
}