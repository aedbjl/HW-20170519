<?php
include 'sql.php';
$pdo=new pdo($dsn,$user,$password,$opt);
$id = $_REQUEST['id'];
$sql="select * from member  where id = ?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$id]);
$goal = 0;
$obj = $stmt->fetchObject();
$newresult = 0.5*("$obj->power")+0.3*("$obj->contact") + 0.2*("$obj->speed");

$rs = rand(0, $newresult);
if ($rs <= 0.5) {
    $goal = 1;
} else {
    $goal = 0;
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