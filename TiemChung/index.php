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
        require("./template/template.phtml");
        break;
    case "dangkytiem":
        
        require("./template/template.phtml");
        break;
    case "datmua": 
        
        require("./template/template.phtml");
        break; 
    case "vacxintreem": 
        
        require("./template/template.phtml");
        break;  
    case "timtrungtam": 
        $controller = new TrungTamController();
        $controller->listTrungTam();
        require("./template/template.phtml");
        break; 
    case "tuvan": 
        
        require("./template/template.phtml");
        break; 
    default:
        $controller = new HomeController();
        $controller->index();
        break;
}

?>
