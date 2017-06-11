<?php
include 'sql.php';
$pdo=new pdo($dsn,$user,$password,$opt);
$sql="select * from member";
$stmt=$pdo->prepare($sql);
$stmt->execute();
echo '<table>';
while ($obj=$stmt->fetchObject()){
    echo '<tr>';
    echo "<td >{$obj->account}:{$obj->password}:{$obj->realname}</td>";
    echo '</tr>';
}
echo '</table>';