<?php
include 'sql.php';
$pdo = new pdo($dsn, $user, $password, $opt);
if (!isset($_REQUEST['account']))
    header("Location: 213654654.php");
$account = $_REQUEST['account'];
$passwd =
    password_hash(
        $_REQUEST['passwd'], PASSWORD_DEFAULT);
$rname = $_REQUEST['rname'];
$sql = "INSERT INTO ooo (account,password,name) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);    // statement SQL
$stmt->execute([$account,$passwd,$rname]);
header("Location: main.html");