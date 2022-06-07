<?php

class PhieuDangKyTiemController
{
    public function showtoaddphieudangkytiem()
    {
        $listvacxin = VacxinModel::listVacxin();
        $listcenter = TrungTamModel::listTrungTam();
        $VIEW = "./view/DangKyTiem.phtml";
        require("./template/template.phtml");
    }

    public function addphieudangkytiem()
    {
        if (isset($_REQUEST["MaDK"]) && isset($_REQUEST["SDT"]))
        {
            $p = new PhieuDangKyTiemModel();
            $p->MaDK = $_REQUEST["MaDK"];
            $p->HoTenNguoiTiem = $_REQUEST["HoTenNguoiTiem"];
            $p->NgaySinh = $_REQUEST["NgaySinh"];
            $p->GioiTinh = $_REQUEST["GioiTinh"];
            $p->MaKH = $_REQUEST["MaDK"];
            $p->TinhThanh = $_REQUEST["TinhThanh"];
            $p->QuanHuyen = $_REQUEST["QuanHuyen"];
            $p->PhuongXa = $_REQUEST["PhuongXa"];
            $p->SoNha = $_REQUEST["SoNha"];
            $p->HoTenNguoiLienHe = $_REQUEST["HoTenNguoiLienHe"];
            $p->QuanHe = $_REQUEST["QuanHe"];
            $p->SDT = $_REQUEST["SDT"];
            $p->Vacxin = $_REQUEST["Vacxin"];
            // $tt = TrungTamModel::getonecenter($_REQUEST["TrungTam"]);
            // $p->TrungTam = $tt->MaTT;
            $p->TrungTam = $_REQUEST["TrungTam"];
            $p->NgayTiem  = $_REQUEST["NgayTiem"];

            $res = PhieuDangKyTiemModel::addphieudangkytiem($p);
            if ($res)
                echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
            else
                echo "<script type='text/javascript'>alert('Thêm thất bại');</script>";
        }
       
        $listcenter = TrungTamModel::listTrungTam();
        $VIEW = "./view/DangKyTiem.phtml";
        require("./template/template.phtml");
    }


}
?>
