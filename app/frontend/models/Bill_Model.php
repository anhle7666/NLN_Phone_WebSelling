<?php
class Bill_Model extends Base_Model{
    public function createBill($billData=[]){
       $this->insert('hoa_don', [
            'idTK'=>$billData['SDT'],
            'phuongThucTT'=>$billData['phuongThucTT'],
            'diaChiGiaoHang'=>$billData['diaChi'],
            'phiVC'=>$billData['phiVC'],
            'ngayTao'=>date("Y-m-d"),
            'idTrangThai'=>0
        ]);             
        
    }

    public function setBill($data){
        foreach($data as $data){
            $this->update('chi_tiet_sp', ['SL'=>$data['SL']-$data['SLMua']], 
             "idSP={$data['idSP']} AND idMau={$data['idMau']} AND idRam={$data['idRam']} AND idBoNho={$data['idBoNho']}");
            unset($data['SL']); var_dump($data);
            $this->insert('chi_tiet_hd', $data);
            
        }      
    }

    public function load($trangThai=null){
        $SDT=Session::get('SDT');
        $cond=$trangThai!=null?"AND hd.idTrangThai=$trangThai":"";
        $query="SELECT sp.tenSP, ram.RAM, bo_nho.boNho, mau.mau, anh.linkAnh, hd.*, ct.*, tt.trangThai FROM hoa_don hd JOIN trang_thai_hd tt ON hd.idTrangThai=tt.idTrangThai JOIN chi_tiet_hd ct ON hd.idHD=ct.idHD JOIN ram ON ct.idRam=ram.idRam 
            JOIN bo_nho ON ct.idBoNho=bo_nho.idBoNho JOIN san_pham sp ON ct.idSP=sp.idSP JOIN mau ON ct.idSP=mau.idSP AND ct.idMau=mau.idMau
            JOIN anh ON ct.idSP=anh.idSP AND ct.idMau=anh.idMau WHERE hd.idTK=$SDT AND idAnh=1 $cond ORDER BY hd.ngayTao;";
        return $this->select($query);
    }
}