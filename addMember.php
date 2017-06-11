<?php
//include 'sqlC.php';
//$pdo=@new pdo($dsn,$user,$password,$opt);
if(isset($_GET['account'])){
    $account=$_GET['account'];
    $passwd=password_hash($_GET['passwd'],PASSWORD_DEFAULT);
    $realname=$_GET['realname'];
//    $sql='insert into member(account,password,realname) values(?,?,?)';
//    $pdo->prepare($sql)->execute([]);


    $sql="insert into member(account,password,realname)"." values('{$account}','{$passwd}','{$realname}')";
    $db=@ new mysqli('127.0.0.1','root','root','checkaccount');
    $db->query($sql);
    header('Location:555.html');
}
?>

<form>
    <table>
        <tr>
            <th>account</th>
            <td><input type="text" name="account"></td>

        </tr>
        <tr>
            <th>password</th>
            <td><input type="password" name="passwd"></td>

        </tr>
        <tr>
            <th>name</th>
            <td><input type="text" name="realname"></td>

        </tr>
        <tr>

            <td colspan="2"><input type="submit" value="new"></td>

        </tr>

    </table>

</form>