<?php
//$upload=$_FILES['upload'];
////echo gettype($upload);
//if($upload['error']==0) {
//    echo $upload['name'];
//    if (copy($upload['tmp_name'],
//        "./upload/{$upload['name']}")){
//        echo 'Ok';
//}
//else{
//        echo 'copyFail';
//    }
//}else{
//    echo 'upload fail';
//}
//
//?>

<?php
$upload = $_FILES['upload'];
//var_dump($upload);
foreach ($upload['error'] as $index => $error){
    if ($error == 0){
        copy($upload['tmp_name'][$index],
            "./upload/{$upload['name'][$index]}");
    }
}