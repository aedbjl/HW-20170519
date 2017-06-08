<?php
include 'sql.php';
$pdo=new pdo($dsn,$user,$password,$opt);
$id = $_REQUEST['id'];
$sql="select account from member  where id = ?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$id]);
$goal = 0;
$obj = $stmt->fetchObject();
//$goal = $obj->account;
$rs = rand(0, 10);
if ($rs <= "$obj->account") {
    $goal += 1;
} else {
    $goal += 0;
}
echo $goal ;
//            while ($obj = $stmt->fetchObject()) {
//
//                $rs = rand(0, 10);
//                if ($rs <= "$obj->account") {
//                    $goal += 1;
//                } else {
//                    $goal += 0;
//                }
//
//            }
//            echo $goal;