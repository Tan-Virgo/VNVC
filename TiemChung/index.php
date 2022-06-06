<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require_once("./controller/Home.php");

require_once("./controller/VacxinController.php");
require_once("./model/Vacxin.php");

require_once("./controller/TrungTamController.php");
require_once("./model/TrungTam.php");

require_once("./controller/PhieuDangKyTiemController.php");
require_once("./model/PhieuDangKyTiem.php");

require_once("config/dbconnect.php"); 

$action = "";
if (isset($_REQUEST["action"]))
{    
    $action = $_REQUEST["action"];
}
 

switch ($action)
{
    case "banggia":
        $controller = new VacxinController();
        $controller->listVacxin();
        break;
    case "dangkytiem":
        $controller = new PhieuDangKyTiemController();
        $controller->showtoaddphieudangkytiem();
        break;
    case "dangky":
        $controller = new PhieuDangKyTiemController();
        $controller->addphieudangkytiem();
        break;
    case "datmua": 
        
        break; 
    case "vacxintreem": 
        
        break;  
    case "timtrungtam": 
        $controller = new TrungTamController();
        $controller->listTrungTam();
        break; 
    case "tuvan": 
        
        break; 
    default:
        $controller = new HomeController();
        $controller->index();
        break;
}

?>
