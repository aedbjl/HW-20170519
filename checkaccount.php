<?php
include "sqlC.php";
session_start();
$pdo=new pdo($dsn,$user,$password,$opt);

if(!isset($_REQUEST['account'])) header('Location:555.html');
$account=$_REQUEST['account'];
$passwd=$_REQUEST['passwd'];

$sql="select * from member where account = ?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$account]);
if ($stmt->rowCount() > 0) {
    $memberObj = $stmt->fetchObject();
    $dbPasswd = $memberObj->password;
    if (password_verify($passwd, $dbPasswd )) {
        $_SESSION['member'] = $memberObj;
        header('Location:555.php');
    } else {
        header('Location:555.html');
    }}
else{
        header('Location:555.html');
    }
?>








