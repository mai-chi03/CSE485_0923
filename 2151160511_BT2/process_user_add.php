<?php
//nhan du lieu tu form
if(isset($_POST['sbmSave'])){
    $user=$_POST['user'];
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
}
//gia su moi du lieu dei dam bao hop le
//kiem tra du lieu
try{
    //buoc 1: ket noi db server
    $conn =new PDO(dsn: "mysql:host=localhost;dbname=class",username:"root", password: maichi);
//buoc2: thuc hien truy van


//buoc3:
$rowCount = $stmt -> rowCount();
if($rowCount>0){
$response ="username or email existed";
    header(header:"location:users_management.php?response=$response");
}else{
    $pass_hash = password_hash($pass, algo: PASSWORD_DEFAULT);
}
}