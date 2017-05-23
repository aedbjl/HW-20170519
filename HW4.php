
<table width="100%" border="2px">

    <?php
    for ($j = 0; $j < 10; $j++) {
        echo '<tr>';
        for ($i = 1; $i <= 10; $i++) {
            $number = $i + $j * 10;
            $flag=true;
            if($number==1){
                $flag=false;
            }
            for($numberA=2;$numberA<$number;$numberA++){
                if(($number%$numberA)==0){
                    $flag=false;
                    break;
                }
            }
            if($flag==true){
                echo "<td bgcolor='yellow'>$number</td>";
            }else {
                echo "<td>$number</td>";
            }
        }
        echo '</tr>';
    }

//    for($n=3;$n<=10;$n++){
//        $flag=true;
//        for ($m = 2; $m < $n; $m++) {
//            if (($n % $m) == 0) {
//                $flag = false;
//                break;
//            }
//
//        }
//        if ($flag==true){
//            echo'OK';
//        }else{
//            echo'F';
//        }
//    }



    ?>


</table>
