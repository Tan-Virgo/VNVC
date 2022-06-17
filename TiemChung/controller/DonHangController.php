<?php

class DonHangController
{ 
    public function showtoadddonhang()
    {
        $listvacxin = VacxinModel::listVacxin();
        $VIEW = "./view/DatMua.phtml";
        require("./template/template.phtml");
    }


    public function datmua()
    {
        if (isset($_REQUEST["MaDH"]) && isset($_REQUEST["SDT"]) && isset($_REQUEST["listVacxin"]))
        {
            $p = new DonHangModel();
            $p->MaDH = $_REQUEST["MaDH"];
            $p->HoTenNguoiMua = $_REQUEST["HoTenNguoiMua"];
            $p->NgayDat = date("Y-m-d");
            $p->NgaySinh = $_REQUEST["NgaySinh"];
            $p->GioiTinh = $_REQUEST["GioiTinh"];
            $p->TinhThanh = $_REQUEST["TinhThanh"];
            $p->QuanHuyen = $_REQUEST["QuanHuyen"];
            $p->PhuongXa = $_REQUEST["PhuongXa"];
            $p->SoNha = $_REQUEST["SoNha"];
            $p->SDT = $_REQUEST["SDT"];
            $p->PhuongThucThanhToan = $_REQUEST["PhuongThucThanhToan"];
            // Xử lý mảng vacxin chọn

            $listvacxin = explode(" | ", $_REQUEST["listVacxin"]);

            $list = array();
            foreach ($listvacxin as $item)
            {
                $obMaVacxin = explode(" - ", $item);
                $VacxinChon = new VacxinChonModel();
                $VacxinChon->MaVacxin = $obMaVacxin[0];
                $VacxinChon->SoLuong = $obMaVacxin[1];
                $list[] = $VacxinChon;
            }

            $p->ListVacxin  = $list;

            $res = DonHangModel::datmua($p);
            if ($res)
                echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
            else
                echo "<script type='text/javascript'>alert('Thêm thất bại');</script>";
        }
       
        $listvacxin = VacxinModel::listVacxin();
        $VIEW = "./view/DatMua.phtml";
        require("./template/template.phtml");
    }


}
?>
