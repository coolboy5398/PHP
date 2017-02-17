<?php
/**
 * Created by PhpStorm.
 * User: dongzheng
 * Date: 2017/2/16
 * Time: 下午11:41
 */
/*$v1=1;
$v2=2;
if (isset($v1)){
   echo "<br/> v1存在";
}*/

//下面这段代码是演示变量值传递和引用传递的区别
$v1=1;
$v2=$v1;
$v3=$v1+10;
$v2++;
echo "<br/> V3=$v3,v2=$v2";//两行一样
echo "<br/> V3=".$v3;
$v4=&$v2;
$v4++;
echo "<br/> V4=$v4,v2=$v2";//引用传递，引用的变量变化，被引用的变量也会变化
?>