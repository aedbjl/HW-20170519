<?php
include 'sqlC.php';
session_start();
if(!isset($_SESSION['member'])) die('die');

$memberObj=$_SESSION['member'];

$pdo = new pdo($dsn, $user, $password, $opt);
$sql = "select * from member";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>
Hello, <?php echo $memberObj->realname; ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form width="100%" border="2px">
    <table>
        <tr>
            <td id="one" name="one" onclick=""></td>
            <td id="two" name="two" onclick=""></td>
            <td id="three" name="three" onclick=""></td>
        </tr><br>
        <tr>
            <td id="four" name="four" onclick=""></td>
            <td id="five" name="five" onclick=""></td>
            <td id="six" name="six" onclick=""></td>
        </tr><br>
        <tr>
            <td><td id="seven" name="seven" onclick=""></td>
            <td<td id="eight" name="eight" onclick=""></td>
            <td id="nine" name="nine" onclick=""></td>
        </tr><br>
    </table>
</form>
<div id="here"></div>
<script>
    $(document).ready(function() {
        setInterval(OOO, 1000);
    });
    function OOO(){
        $.get("666.php", function(data, status){
            if(status=='success'){
                $("#here").html(data)}
        })
    }
</script>



</body>
</html>