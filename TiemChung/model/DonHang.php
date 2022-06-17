<?php
class DonHangModel
{
    public $MaDH;
    public $HoTenNguoiMua;
    public $NgayDat;
    public $NgaySinh;
    public $GioiTinh;
    public $TinhThanh;
    public $QuanHuyen; 
    public $PhuongXa;
    public $SoNha; 
    public $SDT;
    public $PhuongThucThanhToan;
    public $ListVacxin;

    function __construct() 
    {
        $this->MaDH = "";
        $this->HoTenNguoiMua = "";
        $this->NgayDat = "";
        $this->NgaySinh = "";
        $this->GioiTinh = "";
        $this->TinhThanh = "";
        $this->QuanHuyen = "";
        $this->PhuongXa = "";
        $this->SoNha = "";
        $this->SDT = "";
        $this->PhuongThucThanhToan = "";
        $this->ListVacxin = "";
    }

    public static function getlistvacxin()
    {

    }

    public static function datmua($p)
    {
        $db = connectMongo();
        $collectionDonHang = $db->DonHang;

        $insert = $collectionDonHang->insertOne([
            'MaDH' => $p->MaDH,
            'HoTenNguoiMua' => $p->HoTenNguoiMua,
            'NgayDat' => $p->NgayDat,
            'NgaySinh' => $p->NgaySinh,
            'GioiTinh' => $p->GioiTinh,
            'TinhThanh' => $p->TinhThanh,
            'QuanHuyen' => $p->QuanHuyen,
            'PhuongXa' => $p->PhuongXa,
            'SoNha' => $p->SoNha,
            'SDT' => $p->SDT,
            'PhuongThucThanhToan' => $p->PhuongThucThanhToan,
            'ListVacxin' => $p->ListVacxin
        ]);

        return $insert;
    }
}


?>