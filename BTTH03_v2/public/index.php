<?php
require_once('../app/config/config.php');
require_once APP_ROOT.'/app/services/SachService.php';
//echo APP_ROOT;
$sachService = new SachService();
$sachs =$sachService-> getAllSachs();

echo"<pre>";
print_r($sachs);
echo"</pre>";
//$homeController = new HomeController();
//$homeController->index();

//$controller = isset($_GET['$controller'])?$_GET['$controller']:'home';
//$action = isset($_GET['action'])?$_GET['action']:'index';

//if($controller=='home'){
    //require_once APP_ROOT.'/app/controllers/HomeController.php';
    //$homeController = new HomeController();
    //$homeController->index();
//}else if($controller == 'sach'){
    //require_once APP_ROOT.'/app/controllers/SachController.php';
    //$sachController = new SachController();
    //$sachController->index();
//}else{
//echo "khong ton tai";
//}