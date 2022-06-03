<?php

class TrungTamController
{
    public function listTrungTam()
    {
        $tt = TrungTamModel::listProvince();
        if (isset($_REQUEST["TinhThanh"]) && $_REQUEST["TinhThanh"] != "All")
            $data = TrungTamModel::listTrungTamTrongTinhThanh($_REQUEST["TinhThanh"]); 
        else
            $data = TrungTamModel::listTrungTam(); 
            
        $VIEW = "./view/TimTrungTam.phtml";
        require("./template/template.phtml");
    }


}
?>
