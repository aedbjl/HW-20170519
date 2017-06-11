<?php
session_start();
if (!isset($_SESSION['id'])) header('Location:555.php');
$id=$_SESSION['id'];
$account=$_GET['power'];
$password=$_GET['contact'];
$realname=$_GET['speed'];
$sql="update member set power='{$account}',contact='{$password}', speed ='{$realname}' where id={$id}";
$db = @new mysqli('127.0.0.1',
    'root','root','iii');
$db->query($sql);
header("Location: 555.php");
