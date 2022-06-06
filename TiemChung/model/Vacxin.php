<?php
require_once("./Model/CallAPI.php");

    class  VacxinModel
    {
        public $MaVacxin;
        public $TenVacxin;
        public $NuocSanXuat;
        public $GiaBanLe;
        public $GiaYeuCau;
        public $TinhTrang;
        public $ChiTiet;
        public $ChongChiDinh;
        public $BaoQuan;
        public $MaNhomTuoi;
        public $TenNhomTuoi;
        public $MaNhomBenh;
        public $TenNhomBenh;

        function __construct() 
        {
            $this->MaVacxin = "";
            $this->TenVacxin = "";
            $this->NuocSanXuat = "";
            $this->GiaBanLe = "";
            $this->GiaYeuCau = "";
            $this->TinhTrang = "";
            $this->ChiTiet = "";
            $this->ChongChiDinh = "";
            $this->BaoQuan = "";
            $this->MaNhomTuoi = "";
            $this->TenNhomTuoi = "";
            $this->MaNhomBenh = "";
            $this->TenNhomBenh = "";
        }
        
        public static function listVacxin()
        {
            phpinfo();
            $url = "https://localhost:44350/api/vacxin";

            $get_data = callAPI('GET', $url, false);
            $response = json_decode($get_data, true);
            
            // $dsVacxin = array();

            // if ($response) 
            // {            
            //     foreach ($response as $row) {
            //         $vacxin = new VacxinModel();
            //         //$vacxin->MaVacxin = $row["maNCC"];
                    
            //         print $row["Values"]["MaVacxin"];
                    
            //         $dsNCC[] = $ncc; //add an item into array
            //     }
            // }

            //return $dsNCC;
        }
    }
?>