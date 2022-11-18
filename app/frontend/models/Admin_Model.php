<?php
class Admin_Model extends Base_Model{
    public function loadDonHang($cond="1"){
        $query="SELECT tk.hoTen, hd.*, tt.trangThai, SUM(ct.giaBan*ct.SLMua) gia, SUM(ct.thue) thue FROM tai_khoan tk JOIN hoa_don hd ON tk.SDT=hd.idTK JOIN trang_thai_hd tt ON hd.idTrangThai=tt.idTrangThai JOIN chi_tiet_hd ct ON hd.idHD=ct.idHD
        WHERE $cond
        GROUP BY hd.idHD
        ORDER BY hd.idTrangThai AND hd.ngayTao;";
        return $this->select($query);
    }
    public function loadSanPham($sort="ct.SL", $cond=1){
        $query="SELECT sp.tenSP, nsx.tenNSX, mau.mau, ct.*, ram.RAM, bo_nho.boNho FROM san_pham sp 
        JOIN nsx ON sp.idNSX=nsx.idNSX JOIN chi_tiet_sp ct ON sp.idSP=ct.idSP 
        JOIN ram ON ct.idRam=ram.idRam JOIN bo_nho ON ct.idBoNho=bo_nho.idBoNho 
        JOIN mau ON ct.idSP=mau.idSP AND ct.idMau=mau.idMau WHERE $cond ORDER BY $sort;";
        return $this->select($query);
    }
    public function updateTrangThai($idHD, $idTrangThai){
        return $this->update('hoa_don', ['idTrangThai'=>$idTrangThai], "idHD=$idHD");
    }
    public function loadBaoCao($cond, $display){
        $query=$display=='month'?
        "SELECT DATE_FORMAT(hd.ngayTao, \"%m-%Y\") thoiGian ,COUNT(DISTINCT hd.idHD) tongDon, SUM(ct.giaBan) doanhThu, SUM(ct.thue) thue, SUM(hd.phiVC) phiVC 
        FROM hoa_don hd JOIN chi_tiet_hd ct ON hd.idHD=ct.idHD WHERE $cond GROUP BY MONTH(hd.ngayTao);"
        :"SELECT hd.ngayTao thoiGian ,COUNT(DISTINCT hd.idHD) tongDon, SUM(ct.giaBan) doanhThu, SUM(ct.thue) thue, SUM(hd.phiVC) phiVC 
        FROM hoa_don hd JOIN chi_tiet_hd ct ON hd.idHD=ct.idHD WHERE $cond GROUP BY hd.ngayTao;"
        ;
        return $this->select($query);
    }
    public function loadChiTietHD($idHD){
        $query="SELECT tk.hoTen, tk.diaChi, tk.SDT, tk.email, hd.*, ct.*, sp.tenSP, ram.RAM, bo_nho.boNho, mau.mau FROM hoa_don hd 
        JOIN chi_tiet_hd ct ON hd.idHD=ct.idHD JOIN tai_khoan tk ON hd.idTK=tk.SDT 
        JOIN san_pham sp ON ct.idSP=sp.idSP JOIN ram ON ct.idRam=ram.idRam JOIN bo_nho ON ct.idBoNho=bo_nho.idBoNho JOIN mau ON ct.idMau=mau.idMau AND ct.idSP=mau.idSP
        WHERE hd.idHD=$idHD;";
        return $this->select($query);
    }
}