<?php
class TrungTamModel
{
    public $MaTT;
    public $TenTT;
    public $SDT;
    public $TinhThanh;
    public $QuanHuyen;
    public $PhuongXa;
    public $SoNha; 

    function __construct() 
    {
        $this->MaTT = "";
        $this->TenTT = "";
        $this->SDT = "";
        $this->TinhThanh = "";
        $this->QuanHuyen = "";
        $this->PhuongXa = "";
        $this->SoNha = "";
    }

    public static function listTrungTam()
    {
        $db = connectMongo();
        $collectionTrungTam = $db->TrungTam;
        
        $cursor = $collectionTrungTam.find();

        $dstrungtam = array();

        foreach ($cursor as $document) 
        {
            $tt = new TrungTamModel();
            $tt->MaTT = $document["MaTT"];
            $tt->TenTT = $document["TenTT"];
            $tt->SDT = $document["SDT"];
            $tt->TinhThanh = $document["TinhThanh"];
            $tt->QuanHuyen = $document["QuanHuyen"];
            $tt->PhuongXa = $document["PhuongXa"];
            $tt->SoNha = $document["SoNha"];
            $dstrungtam[] = $tt;
        }

        return $dstrungtam;
    }

    public static function listTrungTamTrongTinhThanh()
    {

    }
}


?>