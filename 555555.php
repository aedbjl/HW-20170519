<?php
date_default_timezone_set('Asia/Taipei');

$time=date('Y-m-d H:i:s');
$rs = imagecreatefromjpeg("./photo.jpeg");
$blue=imagecolorallocate ( $rs , 0 , 0 , 255 );
imagettftext ( $rs , 40 , 0 , 0 , 200 ,
    $blue , "./fireflysung.ttf" ,
    "{$time}" );
header('Content-Type:image/jpeg');
imagejpeg($rs);
imagedestroy($rs);