<?php

class VacxinController
{
    public function listVacxin()
    {
        $data = VacxinModel::listVacxin(); 
        $VIEW = "./view/BangGiaVacxin.phtml";
        require("./template/template.phtml");
    }

    public function getVacxin()
    {
        $mavacxin = $_REQUEST["mavacxin"];
        $datalist = VacxinModel::getVacxin($mavacxin); 
        $data = $datalist[0]; 
        $VIEW = "./view/ChiTietVacxin.phtml";
        require("./template/template.phtml");
    }
}
?>
