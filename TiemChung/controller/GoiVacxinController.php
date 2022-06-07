<?php

class GoiVacxinController
{
    public function listGoiVacxin()
    {
        $data = GoiVacxinModel::listGoiVacxin(); 
        $goivacxin = null;
        $listvacxin = null;
        $VIEW = "./view/GoiVacxinTreEm.phtml";
        require("./template/template.phtml");
    }

    public function getListVacxin()
    {
        $data = GoiVacxinModel::listGoiVacxin(); 
        $goivacxinlist = GoiVacxinModel::getGoiVacxin($_REQUEST["MaGoi"]);
        
        $goivacxin = $goivacxinlist[0];

        $listvacxin = VacxinOfGoiVacxinModel::getListVacxin($_REQUEST["MaGoi"]);
        $VIEW = "./view/GoiVacxinTreEm.phtml";
        require("./template/template.phtml");
    }
}
?>
