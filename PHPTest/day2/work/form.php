<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/8
 * Time: 12:35
 */

$n1=$_POST["UserName"];
$n2=$_POST["UserPwd"];
$n3=$_POST["sex"];
$n4=$_POST["nation"];
$n5=$_POST["cars"];
$n6=$_POST["memo"];
$n7=$_POST["hid"];
echo "$n1<br/>$n2<br/>$n3<br/>";
for($i=0;$i<count($n4);$i++)
{
    echo "$n4[$i]<br>";
}
echo"$n5<br/>$n6<br/>$n7<br/>";