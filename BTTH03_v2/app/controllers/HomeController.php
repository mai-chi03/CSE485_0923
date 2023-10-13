<?php
require_once APP_ROOT.'/app/services/SachService.php';
class HomeController{
    public function index(){
        $sachService = new SachService();
        $sachs = $sachService->getAllSachs();
        include APP_ROOT.'/views/home/index.php';
    }
}