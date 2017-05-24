<?php
date_default_timezone_set("Asia/Taipei");
$dirname='.';
if (isset($_GET['dirname'])){
    $dirname=$_GET['dirname'];
    if(isset($_GET['filename'])){
        $delfile=$_GET['filename'];
        unlink("{$dirname}/{$delfile}");
    }
}
?>

    <form>
        <input type="text" name="dirname"/>
        <input type="submit" value="chdir"/>

    </form>
    <table width="100%" border="2px">
        <tr>
            <td>filename</td>
            <td>type</td>
            <td>size</td>
            <td>xtime</td>
            <td>download</td>
            <td>delete</td>
            <?php
            $fp=opendir($dirname);
            while ($file=readdir($fp)){
//    echo $file.'<br>';
                echo '<tr>';
                echo "<td>{$file}</td>";
                $type="";
                if(is_dir("{$dirname}/{$file}")){
                    $type='dir';
                }elseif(is_file("{$dirname}/{$file}")){
                    $type='file';
                }
                echo "<td>{$type}</td>";
                echo "<td>".filesize("{$dirname}/{$file}")."</td>";
                echo "<td>".date('Y-m-d H:i:s',filemtime("{$dirname}/{$file}"))."</td>";
                echo "<td><a href='?dirname={$dirname}&filename={$file}' download='?dirname={$dirname}&filename={$file}'>Download</a></td>";
                echo "<td><a href='?dirname={$dirname}&filename={$file}' onclick=\"return confirm('Del ?')\">Delete</a></td>";
                echo '</tr>';
            }
            ?>



        </tr>



    </table>
    <form  method="post" enctype="multipart/form-data">
        <input type="file" name="upload[]"><br>
        <input type="file" name="upload[]"><br>
        <input type="file" name="upload[]"><br>
        <input type="file" name="upload[]"><br>
        <input type="submit" value="Upload">
        <?php
        $upload = $_FILES['upload'];
        //var_dump($upload);
        foreach ($upload['error'] as $index => $error){
            if ($error == 0){
                copy($upload['tmp_name'][$index],
                    "./upload/{$upload['name'][$index]}");
            }
        }

        ?>
    </form>


<?php
//$fp = opendir("d:\\test1");
////$fp = opendir(~/test)
//if($fp){
//    echo'OK<br>';
//}else{
//    echo'XX<br>';
//}
//
//echo realpath("../../");
//
//$fp=opendir($dirname);
//while ($file=readdir($fp)){
////    echo $file.'<br>';
//    echo '<tr>';
//    echo "<td>{$file}</td>";
//    echo '<td></td>';
//    echo '<td></td>';
//    echo '<td></td>';
//    echo '<td></td>';
//    echo '</tr>';
//
//}