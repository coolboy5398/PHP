<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/3
 * Time: 12:39
 */
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$fuhao=$_POST["yunsuanfu"];
switch ($fuhao)
{
    case "+":
        $result=$n1+$n2;
}
echo "$n1+$n2=$n3";