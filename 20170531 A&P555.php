<?php
include 'sql.php';
$pdo=@new pdo($dsn,$user,$password,$opt);

$sql='insert into member(account,password,realname) values(?,?,?)';

$pdo->prepare($sql)->execute([]);
if(isset($_GET['delid'])){
    $delid=$_GET['delid'];
    $sql="delete from member where id={$delid}";
    $pdo->query($sql);
}
$sql='select * from member';
$rs= $pdo->query($sql);
?>


<a href="addMember.php">new</a>
<table width="100%" border="2px">
    <tr>

        <th>id</th>
        <th>account</th>
        <th>password</th>
        <th>name</th>
        <th>delete</th>
        <th>edit</th>
        <?php
        while ($row=$rs->fetch_object()){
            echo "<tr>";
            echo "<td>{$row->id}</td>";
            echo "<td>{$row->account}</td>";
            echo "<td>{$row->password}</td>";
            echo "<td>{$row->realname}</td>";
            echo "<td><a href='?delid={$row->id}'>del</td>";
            echo "<td><a href='editMember.php?editid={$row->id}'>edit</td>";
            echo "</tr>";
        }
        ?>


    </tr>
</table>