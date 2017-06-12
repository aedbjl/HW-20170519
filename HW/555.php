<style>
    body {
        background-size: cover;
        background-image: url('./img/ed.jpg')
    }
    a:link, a:visited {
        background-color: green;
        color: white;
        padding: 8px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }


    a:hover, a:active {
        background-color: green;
    }

    a.logout:link, a.logout:visited{
        background-color: darkred;
        color: white;
        padding: 8px 12px;
        text-align: center;
        text-decoration: none;
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
        color: white;
        padding: 8px 12px;
        text-align: center;
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
<table width="100%" border="2px">
    <tr>

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
<div align="center" class="play"><a href="111.html" >play</a><div>