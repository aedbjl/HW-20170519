<?php



$score=rand(0,100);
echo $score.'<br>';

if ($score >= 90) {
    echo 'A';
} else if ($score >= 80) {
    echo 'B';
} else if ($score >= 70) {
    echo 'C';
} else if ($score >= 60) {
    echo 'D';
} else {
    echo 'E';
}




/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/5/19
 * Time: 下午 03:40
 */