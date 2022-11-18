<?php
class Admin_Controller extends Base_Controller{
    function __construct()
    {
        Session::checkAdmin();
        parent::__construct();        
    }
    public function index(){
        $this->title="Đơn hàng";
        $this->layout->set('admin');
        $this->model->load('admin');
        //Cập nhật đơn hàng
        if(isset($_POST['updateTrangThai'])&&$_POST['updateTrangThai']<4)$this->model->admin->updateTrangThai($_POST['idHD'], $_POST['updateTrangThai']);
        //Tạo điều kiện lọc
        $cond="";
        $F=[];
        if(isset($_POST['filter'])){           
            if($_POST['idHDF']!=""){
                $cond.="hd.idHD={$_POST['idHDF']} AND ";
                $F['idHDF']=$_POST['idHDF'];
            }
            if($_POST['hoTenF']!=""){
                $cond.="tk.hoTen LIKE '%{$_POST['hoTenF']}' AND ";
                $F['hoTenF']=$_POST['hoTenF'];
            }
            if($_POST['ngayBDF']!=""){
                $cond.="hd.ngayTao BETWEEN '".date('Y-m-d', strtotime($_POST['ngayBDF']))."' AND ";
                $F['ngayBDF']=$_POST['ngayBDF'];
            }
            else $cond.="hd.ngayTao BETWEEN 0001-01-01 AND ";
            if($_POST['ngayKTF']!=""){
                $cond.="'".date('Y-m-d', strtotime($_POST['ngayKTF']))."' AND ";
                $F['ngayKTF']=$_POST['ngayKTF'];
            }
            else $cond.="CURRENT_DATE() AND ";                          
            
        }
        if($cond!="")$cond=rtrim($cond, " AND ");
        else $cond="1";

        $data=$this->model->admin->loadDonHang($cond);
        $status=$this->model->admin->select("SELECT * FROM trang_thai_hd");
        $result=[];
        foreach($status as $st)$result[$st['idTrangThai']]=$st['trangThai'];
        $this->view->load("donHang", ['data'=>$data, 'status'=>$result, 'F'=>$F]);
    }
    public function tongQuan(){
        $this->title="Tổng quan";
        $this->layout->set('admin');
        $this->view->load("tongQuan");
    }
    public function sanPham(){
        $this->title="Sản phẩm";
        $this->layout->set('admin');
        $this->model->load('admin');
        
        $data=[];
        $sort=0;
        $cond="";
        $tenSPF=null;
        $SLF=null;
        if(isset($_POST['tenSPF'])&&$_POST['tenSPF']!=null){
            $cond.="sp.tenSP LIKE '%{$_POST['tenSPF']}%' AND ";
            $tenSPF=$_POST['tenSPF'];
        }
        if(isset($_POST['SLF'])&&$_POST['SLF']!=null){
            $cond.="ct.SL<{$_POST['SLF']} AND ";
            $SLF=$_POST['SLF'];
        }
        $cond=$cond!=""?rtrim($cond, " AND "):"1";

        if(isset($_POST['sort'])){            
            $data=$this->model->admin->loadSanPham($_POST['sort'], $cond);
            if($_POST['sort']=="ct.gia")$sort=1;
            if($_POST['sort']=="sp.tenSP")$sort=2;
        }
        else $data=$this->model->admin->loadSanPham("ct.SL", $cond);
        
        $this->view->load("sanPham", [
            'data'=>$data, 
            'sortCond'=>$sort,
            'tenSPF'=>$tenSPF,
            'SLF'=>$SLF
            ]);
    }
    public function khachHang(){
        $this->title="Khách hàng";
        $this->layout->set('admin');
        $this->view->load("khachHang");
    }
    public function baoCao(){
        $this->title="Báo cáo";
        $this->layout->set('admin');

        //Tạo điều kiện lọc
        $cond="";
        $F=[];
        if(isset($_POST['filter'])){
            if($_POST['ngayBDF']!=""){
                $cond.="hd.ngayTao BETWEEN '".date('Y-m-d', strtotime($_POST['ngayBDF']))."' AND ";
                $F['ngayBDF']=$_POST['ngayBDF'];
            }
            else $cond.="hd.ngayTao BETWEEN 0001-01-01 AND ";
            if($_POST['ngayKTF']!=""){
                $cond.="'".date('Y-m-d', strtotime($_POST['ngayKTF']))."' AND ";
                $F['ngayKTF']=$_POST['ngayKTF'];
            }
            else $cond.="CURRENT_DATE() AND ";
        }
        if($cond!="")$cond=rtrim($cond, " AND ");
        else $cond="1";
        
        //Hiển thị theo tháng hoặc ngày
       $display=isset($_POST['display'])?$_POST['display']:'month';

        //Load data
        $this->model->load('admin');
        $data=$this->model->admin->loadBaoCao($cond, $display);
        $this->view->load("baoCao",['data'=> $data, 'F'=>$F, 'display'=>$display]);
    }
    public function bieuDoDoanhThu(){
        $this->title="Báo cáo";
        $this->layout->set('admin');

        //Tạo điều kiện lọc
        $cond="";
        $F=[];
        if(isset($_POST['filter'])){
            if($_POST['ngayBDF']!=""){
                $cond.="hd.ngayTao BETWEEN '".date('Y-m-d', strtotime($_POST['ngayBDF']))."' AND ";
                $F['ngayBDF']=$_POST['ngayBDF'];
            }
            else $cond.="hd.ngayTao BETWEEN 0001-01-01 AND ";
            if($_POST['ngayKTF']!=""){
                $cond.="'".date('Y-m-d', strtotime($_POST['ngayKTF']))."' AND ";
                $F['ngayKTF']=$_POST['ngayKTF'];
            }
            else $cond.="CURRENT_DATE() AND ";
        }
        if($cond!="")$cond=rtrim($cond, " AND ");
        else $cond="1";
        
        //Hiển thị theo tháng hoặc ngày
       $display=isset($_POST['display'])?$_POST['display']:'month';

        //Load data
        $this->model->load('admin');
        $data=$this->model->admin->loadBaoCao($cond, $display);
        $this->view->load("thongKeDoanhThu",['data'=> $data, 'F'=>$F, 'display'=>$display]);
    }

    //in hóa đơn
    public function inHD($idHD=null){
        $this->title="Xuất hóa đơn";
        $this->layout->set('inHD');
        $this->model->load('admin');
        $data=$this->model->admin->loadChiTietHD($idHD);
        $this->view->load("hoadon", $data);
    }

    //Thêm sản phẩm
    public function addProductPage()
    {
        $this->model->load("category");
        $titleCategory = $this->model->category->getTitleCategory();
        $nsx = $this->model->category->select("SELECT * FROM nsx;");
        $hdh = $this->model->category->select("SELECT * FROM hdh;");
        $data = [
            'danh_muc' => $titleCategory,
            'nsx' => $nsx,
            'hdh' => $hdh
        ];
        $this->view->load("addProduct", $data);
    }

    public function addProduct()
    {
        $table = "san_pham";
        $data = [
            'idDM' => $_POST['danh_muc'],
            'idNSX' => $_POST['nsx'],
            'mangDiDong' => $_POST['dldd'],
            'idHDH' => $_POST['hdh'],
            'tenSP' => $_POST['tenSP'],
            'cpu' => $_POST['cpu'],
            'pin' => $_POST['pin'],
            'SIM' => $_POST['SIM'],
            'camTruoc' => $_POST['camTruoc'],
            'camSau' => $_POST['camSau'],
            'KTManHinh' => $_POST['KTManHinh'],
            'doPhanGiai' => $_POST['doPhanGiai'],
            'moTa' => $_POST['moTa']
        ];
        $this->model->load("category");
        $this->model->category->insert($table, $data);
        header("Location:?module=admin&action=addProductColorPage&parameter={$_POST['so_mau']}");
    }

    public function addProductColorPage($so_mau = 1)
    {
        $this->view->load("addProductColor", ['so_mau' => $so_mau]);
    }

    public function addProductColor($so_mau)
    {
        $this->model->load('category');
        $idSP = $this->model->category->select("SELECT max(idSP) idSP FROM san_pham;");
        $idSP = (int)$idSP[0]['idSP'];
        for ($i = 1; $i <= $so_mau; $i++) {
            $data_mau = [
                'idSP' => $idSP,
                'idMau' => $i,
                'mau' => $_POST["mau_$i"]
            ];
            $this->model->category->insert('mau', $data_mau);

            $links = $_POST["links_$i"];
            $links = str_replace(' ', '', $links);
            $links = explode("\n", $links);

            $j = 1;
            foreach ($links as $link) {
                $link = trim($link);
                if ($link != "") {
                    $data_anh = [
                        'idSP' => $idSP,
                        'idMau' => $i,
                        'idAnh' => $j,
                        'linkAnh' => $link
                    ];
                    $j++;
                    $this->model->category->insert('anh', $data_anh);
                }
            }
        }
        header("Location:?module=admin&action=addDetailProductPage");
    }

    public function addDetailProductPage()
    {
        $this->model->load('category');
        $mau = $this->model->category->select("SELECT * FROM mau WHERE mau.idSP=(SELECT max(idSP) idSP FROM san_pham);");
        $RAM = $this->model->category->select("SELECT * FROM ram;");
        $bo_nho = $this->model->category->select("SELECT * FROM bo_nho;");
        $data = [
            'mau' => $mau,
            'ram' => $RAM,
            'bo_nho' => $bo_nho
        ];
        $this->view->load("addDetailProduct", $data);
    }
    public function addDetailProduct()
    {

        $this->model->load('category');
        $mau = $this->model->category->select("SELECT * FROM mau WHERE mau.idSP=(SELECT max(idSP) idSP FROM san_pham);");
        $data = [
            'idSP' => $mau[0]['idSP'],
            'idRam' => $_POST['ram'],
            'idBoNho' => $_POST['bo_nho'],
            'gia' => $_POST['gia'],
            'SL' => $_POST['SL']
        ];
        foreach ($mau as $mau) if (isset($_POST[$mau['idMau']])) {
            $data['idMau'] = $mau['idMau'];
            $this->model->category->insert('chi_tiet_SP', $data);            
        }
        header("Location:?module=admin&action=addDetailProductPage");
    }
}