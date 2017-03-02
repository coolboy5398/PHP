<?php
$v1=$_GET["uName"];
$v2=$_GET["uPswd"];
echo "v1=$v1,v2=$v2";
echo "<hr/>";
echo "<pre>";
var_dump($_GET); //var_dump 用于输出一个变量最完整的信息，包括变量名，长度，数据值
//这里是输出"数组"$_GET
echo "</pre>";
/**
 * Created by PhpStorm.
 * User: dongzheng
 * Date: 2017/3/2
 * Time: 下午11:44
 */