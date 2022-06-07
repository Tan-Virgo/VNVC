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
            $url = "https://localhost:44350/api/vacxin";

            $get_data = callAPI('GET', $url, false);
            $response = json_decode($get_data, true);
            
            $dsVacxin = array();

            if ($response) 
            {            
                foreach ($response as $row) {
                    $vacxin = new VacxinModel();
                    $vacxin->MaVacxin = $row["Values"]["MaVacxin"];
                    $vacxin->TenVacxin = $row["Values"]["TenVacxin"];
                    $vacxin->NuocSanXuat = $row["Values"]["NuocSanXuat"];
                    $vacxin->GiaBanLe = $row["Values"]["GiaBanLe"];
                    $vacxin->GiaYeuCau = $row["Values"]["GiaYeuCau"];
                    $vacxin->TinhTrang = $row["Values"]["TinhTrang"];
                    $vacxin->ChiTiet = $row["Values"]["ChiTiet"];
                    $vacxin->ChongChiDinh = $row["Values"]["ChongChiDinh"];
                    $vacxin->BaoQuan = $row["Values"]["BaoQuan"];
                    $vacxin->MaNhomTuoi = $row["Values"]["MaNhomTuoi"];
                    $vacxin->TenNhomTuoi = $row["Values"]["TenNhomTuoi"];
                    $vacxin->MaNhomBenh = $row["Values"]["MaNhomBenh"];
                    $vacxin->TenNhomBenh = $row["Values"]["TenNhomBenh"];
                    
                    $dsVacxin[] = $vacxin; //add an item into array
                }
            }

            return $dsVacxin;
        }


        public static function getVacxin($mavacxin)
        {
            $url = "https://localhost:44350/api/vacxin/" . $mavacxin;

            $get_data = callAPI('GET', $url, false);
            $response = json_decode($get_data, true);
            
            $dsVacxin = array();

            if ($response) 
            {            
                foreach ($response as $row) {
                    $vacxin = new VacxinModel();
                    $vacxin->MaVacxin = $row["Values"]["MaVacxin"];
                    $vacxin->TenVacxin = $row["Values"]["TenVacxin"];
                    $vacxin->NuocSanXuat = $row["Values"]["NuocSanXuat"];
                    $vacxin->GiaBanLe = $row["Values"]["GiaBanLe"];
                    $vacxin->GiaYeuCau = $row["Values"]["GiaYeuCau"];
                    $vacxin->TinhTrang = $row["Values"]["TinhTrang"];
                    $vacxin->ChiTiet = $row["Values"]["ChiTiet"];
                    $vacxin->ChongChiDinh = $row["Values"]["ChongChiDinh"];
                    $vacxin->BaoQuan = $row["Values"]["BaoQuan"];
                    $vacxin->MaNhomTuoi = $row["Values"]["MaNhomTuoi"];
                    $vacxin->TenNhomTuoi = $row["Values"]["TenNhomTuoi"];
                    $vacxin->MaNhomBenh = $row["Values"]["MaNhomBenh"];
                    $vacxin->TenNhomBenh = $row["Values"]["TenNhomBenh"];
                    
                    $dsVacxin[] = $vacxin; //add an item into array
                }
            }

            return $dsVacxin;
        }
    }
?>