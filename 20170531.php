<?php
//1.connect to mysql serve
//2.selct a database
//3.query
//4.close
//$link=@mysqli_connect("127.0.0.1","root","root","iii") or die("Serve Busy");
//if ($link) echo "ok";
$db=@new mysqli ("127.0.0.1","root","root","iii");
//$sql='insert into member(account,password,name) values("brad","1234","fff")';
$sql= 'select * from member';
$result=$db->query($sql);
//$row= $result->fetch_object();
//echo "$row->id.<br>";
//echo "$row->account.<br>";
//echo "$row->password.<br>";
while ($row = $result->fetch_object()){
    echo "$row->id,$row->account,$row->password.<br>";
}