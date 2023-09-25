<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
try{
//buoc1:ket noi DB server
$conn =new PDO(dsn: "mysql:host=localhost;dbname=class",username:"root", password: maichi);
//buoc2: thuc hien truy van
$sql= "DELETE FROM users WHERE user_id = $id";
$stmt = $conn ->prepare($sql);
$stmt ->execute();
//buoc3:xu li ket qua
$rowCount = $stmt -> rowCount();
if($rowCount>0){
$response ="delete rowCount() row(s).";
    header(header:"location:users_management.php?response=$response");
}

}catch(PDOException $e){
    echo $e ->getMassage();
}