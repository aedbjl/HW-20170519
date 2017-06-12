<?php
if (!isset($_GET['a'])){
    echo 'F1';
    die();
}
include "sql.php";
$pdo = new pdo($dsn, $user, $password, $opt);
$account = $_GET['a'];
$sql = "SELECT account FROM ooo WHERE account = ?";
$stmt = $pdo->prepare($sql);    // statement SQL
$stmt->execute([$account]);
if ($stmt->rowCount()>0) {
    // account is exist
    echo 'F2';
}else{
    // OK
    echo 'OK';
}