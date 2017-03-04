<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/3
 * Time: 12:39
 */

var_dump($_GET);
echo "<hr/>";
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$fuhao=$_POST["yunsuanfu"];
if (is_numeric($n1)==false || is_numeric($n2)==false)
{
    $result="算数运算双方必须是数字型";
    echo "$n1$fuhao$n2=$result";
    return;
}
switch ($fuhao)
{
    case "+":
        $result=$n1+$n2;
        break;
    case "-":
        $result=$n1-$n2;
        break;
    case "*":
        $result=$n1*$n2;
        break;
    case "/":
        if ($n2==0)
        {
            $result="除数不允许为0";
        }
        else
        {
            $result=$n1/$n2;
        }

        break;
}
echo "$n1$fuhao$n2=$result";