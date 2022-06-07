<?php
require_once("./Model/CallAPI.php");

    class  VacxinOfGoiVacxinModel
    {
        public $MaVacxin;
        public $TenVacxin;
        public $NuocSanXuat;
        public $GiaBanLe;
        public $SoMui_12;
        public $SoMui_24;
        public $TenNhomBenh;

        function __construct() 
        {
            $this->MaVacxin = "";
            $this->TenVacxin = "";
            $this->NuocSanXuat = "";
            $this->GiaBanLe = "";
            $this->SoMui_12 = "";
            $this->SoMui_24 = "";
            $this->TenNhomBenh = "";
        }
        
        public static function getListVacxin($magoi)
        {
            $url = "https://localhost:44350/api/vacxingoivacxin/" . $magoi;

            $get_data = callAPI('GET', $url, false);
            $response = json_decode($get_data, true);
            
            $dsVacxin = array();

            if ($response) 
            {            
                foreach ($response as $row) {
                    $vacxin = new VacxinOfGoiVacxinModel();
                    $vacxin->MaVacxin = $row["Values"]["MaVacxin"];
                    $vacxin->TenVacxin = $row["Values"]["TenVacxin"];
                    $vacxin->NuocSanXuat = $row["Values"]["NuocSanXuat"];
                    $vacxin->GiaBanLe = $row["Values"]["GiaBanLe"];
                    $vacxin->SoMui_12 = $row["Values"]["SoMui_12"];
                    $vacxin->SoMui_24 = $row["Values"]["SoMui_24"];
                    $vacxin->TenNhomBenh = $row["Values"]["TenNhomBenh"];
                    
                    $dsVacxin[] = $vacxin; //add an item into array
                }
            }

            return $dsVacxin;
        }
    }
?>