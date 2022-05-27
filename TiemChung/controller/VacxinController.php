<?php

class VacxinController
{
    public function listVacxin()
    {
        $data = VacxinModel::listVacxin(); 
        $VIEW = "./view/BangGiaVacxin.phtml";
        require("./template/template.phtml");
    }
}
?>
