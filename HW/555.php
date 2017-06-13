<style>
    body {
        background-size: cover;
        background-image: url('./img/ed.jpg')
    }
    a.play1:link, a.play1:visited {
        background-color: whitesmoke;
        border-radius: 10%;
        border: 1px;
        color: darkgreen;
        padding: 8px 12px;
        text-align: center;
        font-family: sans-serif;
        font-size: 36px;
        text-decoration: none;
        display: inline-block;
    }


    a.play1:hover, a.play1:active {
        background-color: green;
        color: white;
    }

    a.logout:link, a.logout:visited{
        background-color: darkred;
        border-radius: 10%;
        color: white;
        padding: 8px 12px;
        text-align: center;
        text-decoration: none;
        font-family: sans-serif;
        display: inline-block;
    }
    a.logout:hover, a.logout:active {
        background-color: darkred;
    }

    table {
        text-align:center;
        fonz-family:sans-serif;
    }
    a.edit:link, a.edit:visited{
        background-color: blue;
        border-radius: 10%;
        color: white;
        padding: 8px 12px;
        text-align: center;
        font-family: sans-serif;

        text-decoration: none;
        display: inline-block;
    }
    a.edit:hover, a.edit:active {
        background-color: blue;
    }
    div.play {
        font-size: x-large;
    }

</style>
<?php
include 'sql.php';
session_start();
$pdo=new pdo($dsn,$user,$password,$opt);

if (!isset($_SESSION['member'])) header("Location: main.html");
$memberObj = $_SESSION['member'];

$sql="select * from member where id ";
$stmt=$pdo->prepare($sql);
$stmt->execute();

?>
<p align="center" style="font-size: x-large">Hello, <?php echo $memberObj->name; ?></p>
<table width="100%" border="2px" style="font-size: x-large;font-family: sans-serif">
    <tr style="background-color:cornsilk">

        <th>選手</th>
        <th>power</th>
        <th>contact</th>
        <th>speed</th>
        <th>edit</th>
        <?php
        while ($obj = $stmt->fetchObject()){
            echo "<tr>";
            echo "<td>{$obj->id}</td>";
            echo "<td>{$obj->power}</td>";
            echo "<td>{$obj->contact}</td>";
            echo "<td>{$obj->speed}</td>";
            echo "<td><a href='editMember.php?editid={$obj->id}' class='edit'>edit</td>";
            echo "</tr>";
        }
        ?>


    </tr>
</table>


<hr>
<div align="right"><a href="logout.php" class="logout">Logout</a><br></div>
<hr>
<div align="center" class="play"><a href="111.html" class="play1" >play</a><div>