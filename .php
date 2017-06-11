<?php
include 'sql000.php';
$pdo=new pdo($dsn,$user,$password,$opt);
$sql="select account from member where id";
$sql2="select account from OOO where id";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$stmt2=$pdo->prepare($sql2);
$stmt2->execute();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>



</head>
<body>
<script>
    $(document).onclick(function (){
        setInterval(OOO,1000);
    })


</script>

<?php
$goal=0;
while ($obj = $stmt->fetchObject()) {
    $rs = rand(1,10);
    if ($rs <= "$obj->account") {
        $goal += 1;
    } else {
        $goal += 0;
    }
}

$goal2=0;
while ($obj = $stmt2->fetchObject()) {
    $rs = rand(1,10);
    if ($rs <= "$obj->account") {
        $goal2 += 1;
    } else {
        $goal2 += 0;
    }
}
?>


<form>
    <table width="100%" border="3px">
        <tr>
            <td><?php echo "$goal" ;?></td>
            <td></td>
            <td>5</td>
            <td>5</td>
        </tr>
        <tr>
            <td><?php echo "$goal2" ;?></td>
            <td>5</td>
            <td>5</td>
            <td>5</td>
        </tr>
    </table>
</form>


</body>