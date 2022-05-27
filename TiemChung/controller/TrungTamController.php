<?php

class TrungTamController
{
    public function listTrungTam()
    {
        $data = TrungTamModel::listTrungTam(); 
        $VIEW = "./view/TimTrungTam.phtml";
        require("./template/template.phtml");
    }
}
?>
