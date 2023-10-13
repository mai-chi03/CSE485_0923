<?php
 
 class Sach{
    //properties
     private $id;
     private $tenSach;
     private $namXuatBan;
     private $idTacGia;
 

     //methods
     public function __construct($id, $tenSach, $namXuatBan,$idTacGia){
        $this ->id = $id;
        $this ->tenSach = $tenSach;
        $this ->namXuatBan = $namXuatBan;
        $this ->idTacGia = $idTacGia;

     }
    //gertters/setter
    public function getId(){
        return $this ->id;
     }
     public function gettenSach(){
        return $this ->tenSach;
     }
     public function getnamXuatBan(){
        return $this ->namXuatBan;
     }
     public function getidTacGia(){
        return $this ->idTacGia;
     }

     
     
     public function settenSach($tenSach){
        $this->tenSach = $tenSach;
     }
 }