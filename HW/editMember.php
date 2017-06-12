<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="js/bootstrap.js" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        background-size: cover;
        background-image: url('./img/ed.jpg')
    }
    table{
        width:300px;
        height:300px;
        position:fixed;
        margin-left:-150px; /* half of width */
        margin-top:-150px;  /* half of height */
        top:50%;
        left:50%;
        text-align: center;
        font-size: x-large;

    }
    header{
        font-size: large;
        text-align: center;
    }
</style>
<?php
session_start();
if(!isset($_GET['editid'])) header('Location:555.php');
$editid=$_GET['editid'];
$_SESSION['id']=$editid;
$sql="select * from member where id={$editid}";
$db=@ new mysqli('127.0.0.1','root','root','iii');
$rs=$db->query($sql);
$editObj=$rs->fetch_object();
?>

<header><b>數值說明:每個選項皆可隨機出不同的數值，數值越小，能力越好</b><br>
        <b>每個選項所出現的數值為隨機，請多做好事</b>
</header>

<form action="updateMember.php">
    <input type="hidden" name="id" value="<?php echo $editObj->id; ?>">
    <table class="table1">
        <tr>
            <th>power:</th>
<!--            <td><input type="text" name="power" value="--><?php //echo $editObj->power; ?><!--"></td>-->

           <td><select name="power">
                <option value="<?php echo (rand(0,6)+(rand(0,2))); ?>">A</option>
                <option value="<?php echo (rand(0,5)*(rand(0,2))); ?>">B</option>
                <option value="<?php echo (rand(3,10)-(rand(0,2))); ?>">C</option>
                <option value="<?php echo (rand(0,5)*(rand(0,2))); ?>">D</option>
                <option value="<?php echo (rand(0,4)*(rand(0,2))); ?>">E</option>
                </select></td>

        </tr>

        <tr>
            <th>contact:</th>
<!--            <td><input type="text" name="contact" value="--><?php //echo $editObj->contact; ?><!--"></td>-->
            <td><select name="contact">
                    <option value="<?php echo (rand(0,5)*(rand(0,2))); ?>">A</option>
                    <option value="<?php echo (rand(0,3)*(rand(0,3))); ?>">B</option>
                    <option value="<?php echo (rand(0,5)+(rand(0,2))); ?>">C</option>
                    <option value="<?php echo (rand(0,5)+(rand(0,5))); ?>">D</option>
                    <option value="<?php echo (rand(4,8)-(rand(0,2))); ?>">E</option>
                </select></td>
        </tr>
        <tr>
            <th>speed:</th>
<!--            <td><input type="text" name="speed" value="--><?php //echo $editObj->speed; ?><!--"></td>-->
            <td><select name="speed">
                    <option value="<?php echo (rand(4,8)-(rand(0,2))); ?>">A</option>
                    <option value="<?php echo (rand(0,5)+(rand(0,3))); ?>">B</option>
                    <option value="<?php echo (rand(0,5)+(rand(0,5))); ?>">C</option>
                    <option value="<?php echo (rand(0,5)*(rand(0,2))); ?>">D</option>
                    <option value="<?php echo (rand(0,4)*(rand(0,2))); ?>">E</option>
                </select></td>
        </tr>
        <tr>

            <td colspan="2"><input type="submit" value="update"></td>

        </tr>

    </table>
</form>


<!--</form>-->
<!--<form action="updateMember.php">-->
<!--  <select name="power">-->
<!--    <option value="1">1</option>-->
<!--    <option value="2">2</option>-->
<!--    <option value="3">3</option>-->
<!--    <option value="4">4</option>-->
<!--    <option value="5">5</option>-->
<!--  </select>-->
<!--<input type="submit" value="submit">-->


</form>
