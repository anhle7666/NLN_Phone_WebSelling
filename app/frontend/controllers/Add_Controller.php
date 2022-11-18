<?php
class Add_Controller extends Base_Controller
{
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
        header("Location:http://localhost/Quan_Ly_Ban_Hang/?module=add&action=addProductColorPage&parameter={$_POST['so_mau']}");
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
        header("Location:http://localhost/Quan_Ly_Ban_Hang/?module=add&action=addDetailProductPage");
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
        header("Location:http://localhost/Quan_Ly_Ban_Hang/?module=add&action=addDetailProductPage");
    }
}
