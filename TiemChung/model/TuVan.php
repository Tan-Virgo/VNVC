<?php
require_once("./Model/CallAPI.php");

    class  TuVanModel
    {
        public $MaTV;
        public $HoTen;
        public $DiaChi;
        public $Email;
        public $GioiTinh;
        public $SDT;
        public $Tuoi;
        public $LoaiCauHoi;
        public $NoiDung;
        public $ThoiGian;

        function __construct() 
        {
            $this->MaTV = "";
            $this->HoTen = "";
            $this->DiaChi = "";
            $this->Email = "";
            $this->GioiTinh = "";
            $this->SDT = "";
            $this->Tuoi = "";
            $this->LoaiCauHoi = "";
            $this->NoiDung = "";
            $this->ThoiGian = "";
        }
        
        public static function listTuVan()
        {
            $url = "https://localhost:44350/api/tuvan";

            $get_data = callAPI('GET', $url, false);
            $response = json_decode($get_data, true);
            
            $dsTV = array();

            if ($response) 
            {            
                foreach ($response as $row) {
                    $tv = new TuVanModel();
                    $tv->MaTV = $row["Values"]["MaTV"];
                    $tv->HoTen = $row["Values"]["HoTen"];
                    $tv->DiaChi = $row["Values"]["DiaChi"];
                    $tv->Email = $row["Values"]["Email"];
                    $tv->GioiTinh = $row["Values"]["GioiTinh"];
                    $tv->SDT = $row["Values"]["SDT"];
                    $tv->Tuoi = $row["Values"]["Tuoi"];
                    $tv->LoaiCauHoi = $row["Values"]["LoaiCauHoi"];
                    $tv->NoiDung = $row["Values"]["NoiDung"];
                    $tv->ThoiGian = $row["Values"]["ThoiGian"];

                    $dsTV[] = $tv; //add an item into array
                }
            }

            return $dsTV;
        }
    }
?>