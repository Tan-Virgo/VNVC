<?php
class PhieuDangKyTiemModel
{
    public $MaDK;
    public $HoTenNguoiTiem;
    public $NgaySinh;
    public $GioiTinh;
    public $MaKH;
    public $TinhThanh;
    public $QuanHuyen; 
    public $PhuongXa;
    public $SoNha; 
    public $HoTenNguoiLienHe;
    public $QuanHe;
    public $SDT;
    public $Vacxin;
    public $TrungTam;
    public $NgayTiem;

    function __construct() 
    {
        $this->MaDK = "";
        $this->HoTenNguoiTiem = "";
        $this->NgaySinh = "";
        $this->GioiTinh = "";
        $this->MaKH = "";
        $this->TinhThanh = "";
        $this->QuanHuyen = "";
        $this->PhuongXa = "";
        $this->SoNha = "";
        $this->HoTenNguoiLienHe = "";
        $this->QuanHe = "";
        $this->SDT = "";
        $this->Vacxin = "";
        $this->TrungTam = "";
        $this->NgayTiem = "";
    }

    public static function getlistvacxin()
    {

    }

    public static function addphieudangkytiem($p)
    {
        $db = connectMongo();
        $collectionPhieuDangKyTiem = $db->PhieuDangKyTiem;

        $insert = $collectionPhieuDangKyTiem->insertOne([
            'MaDK' => $p->MaDK,
            'HoTenNguoiTiem' => $p->HoTenNguoiTiem,
            'NgaySinh' => $p->NgaySinh,
            'GioiTinh' => $p->GioiTinh,
            'MaKH' => $p->MaKH,
            'TinhThanh' => $p->TinhThanh,
            'QuanHuyen' => $p->QuanHuyen,
            'PhuongXa' => $p->PhuongXa,
            'SoNha' => $p->SoNha,
            'HoTenNguoiLienHe' => $p->HoTenNguoiLienHe,
            'QuanHe' => $p->QuanHe,
            'SDT' => $p->SDT,
            'Vacxin' => $p->Vacxin,
            'TrungTam' => $p->TrungTam,
            'NgayTiem' => $p->NgayTiem
        ]);

        return $insert;
    }
}


?>