<?php
require_once('../../models/Sach.php');
class SachService{
    public function getAllSachs(){
//buoc 1: ket noi database
try {
    $conn = new PDO('mysql:host=localhost;dbname=QLTV', 'root','maichi');
//buoc2: truy van du lieu

$sql= "SELECT * FROM sach";
$stmt= $conn ->query($sql);

//buoc 3: xu ly ket qua
$sachs = [];
while($row = $stmt->fetch()){
$sach = new Sach($row['id'],$row['tenSach'],$row['namXuatBan'],$row['idTacGia']);
$sachs[] = $sach;
}
return $sachs;

}catch (PDOException $e) {
return $sachs = [];
}
    }
    
}