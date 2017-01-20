<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/20
 * Time: 15:08
 */
echo "hhh<br>";
function add($str1,$str2){
    $str3=$str1+$str2;
    return $str3;
}
echo add(1,2)."<br>";
$aaa=&add;
echo $aaa(2,3);