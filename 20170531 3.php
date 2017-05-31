<?php
include 'sql.php';
$pdo=@ new pdo($dsn,$user,$password,$opt);
$sql= 'insert into member(account,password,realname) values(?,?,?)';
//$stmt=$pdo->prepare($sql);
//$stmt->execute(['555','555','5855']);
$pdo->prepare($sql)->execute(['555','5464','564654546']);
//$sql= 'select * from member';
//$rs=$pdo->query($sql);
//while($row= $rs->fetchObject()){
//    echo "{$row->id}:{$row->account}.<br>";
//}