<?php
require_once("./Model/CallAPI.php");

    class  GoiVacxinModel
    {
        public $MaGoi;
        public $TenGoi;
        public $TongGiaGoi_12;
        public $TongGiaGoi_24;

        function __construct() 
        {
            $this->MaGoi = "";
            $this->TenGoi = "";
            $this->TongGiaGoi_12 = "";
            $this->TongGiaGoi_24 = "";
        }
        
        public static function listGoiVacxin()
        {
            $url = "https://localhost:44350/api/goivacxin";

            $get_data = callAPI('GET', $url, false);
            $response = json_decode($get_data, true);
            
            $dsGoiVacxin = array();

            if ($response) 
            {            
                foreach ($response as $row) {
                    $vacxin = new GoiVacxinModel();
                    $vacxin->MaGoi = $row["Values"]["MaGoi"];
                    $vacxin->TenGoi = $row["Values"]["TenGoi"];
                    $vacxin->TongGiaGoi_12 = $row["Values"]["TongGiaGoi_12"];
                    $vacxin->TongGiaGoi_24 = $row["Values"]["TongGiaGoi_24"];
                    
                    $dsGoiVacxin[] = $vacxin; //add an item into array
                }
            }

            return $dsGoiVacxin;
        }


        public static function getGoiVacxin($magoi)
        {
            $url = "https://localhost:44350/api/goivacxin/" . $magoi;

            $get_data = callAPI('GET', $url, false);
            $response = json_decode($get_data, true);
            
            $dsGoiVacxin = array();

            if ($response) 
            {            
                foreach ($response as $row) {
                    $vacxin = new GoiVacxinModel();
                    $vacxin->MaGoi = $row["Values"]["MaGoi"];
                    $vacxin->TenGoi = $row["Values"]["TenGoi"];
                    $vacxin->TongGiaGoi_12 = $row["Values"]["TongGiaGoi_12"];
                    $vacxin->TongGiaGoi_24 = $row["Values"]["TongGiaGoi_24"];
                    
                    $dsGoiVacxin[] = $vacxin; //add an item into array
                }
            }
            return $dsGoiVacxin;
        }
    }
?>