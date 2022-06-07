<?php

class TuVanController
{
    public function listTuVan()
    {
        $data = TuVanModel::listTuVan(); 
        $VIEW = "./view/TuVan.phtml";
        require("./template/template.phtml");
    }

    public function guiTuVan()
    {
        // insert date_add

        // hiển thị 
        $data = TuVanModel::listTuVan(); 
        $VIEW = "./view/TuVan.phtml";
        require("./template/template.phtml");
    }

}
?>
