<?php
/**
 * Created by PhpStorm.
 * User: dongzheng
 * Date: 2017/3/7
 * Time: 下午10:48
 */
$arrname = array("REMOTE_ADDR", "SERVER_ADDR", "SERVER_NAME", "DOCUMENT_ROOT", "PHP_SELF");
$arrdescirbe = array("用户的IP地址", "服务器端的IP地址", "服务器名", "站点的绝对路径", "网页的文件路径");
echo "<table border='1'>";
for ($i = 0; $i < count($arrname); $i++) {
    echo "<tr>";
    echo "<td>$arrname[$i]<td/>";
    echo "<td>\$_SERVER[\"$arrname[$i]\"]<td/>";
    echo "<td>".$_SERVER[$arrname[$i]]."<td/>";
    echo "<td>$arrdescirbe[$i]<td/>";
    echo "<tr/>";
}
echo "<table/>";

echo "<table border='1'>";
foreach ($arrname as $key => $value) {
    echo "<tr>";

    echo "<td>$arrname[$key]<td/>";
    echo "<td>\$_SERVER[\"$value\"]<td/>";
    echo "<td> $_SERVER[$value]<td/>";
    echo "<td> $arrdescirbe[$key]<td/>";
    echo "<tr/>";
}

echo "<table/>";

$arrname = array(
    "REMOTE_ADDR"=>"用户的IP地址",
    "SERVER_ADDR"=>"服务器端的IP地址",
    "SERVER_NAME"=>"服务器名",
    "DOCUMENT_ROOT"=> "站点的绝对路径",
    "PHP_SELF"=>"网页的文件路径");
echo "<table border='1'>";
foreach ($arrname as $key => $value) {
    echo "<tr>";

    echo "<td>$key<td/>";
    echo "<td>\$_SERVER[\"$key\"]<td/>";
    echo "<td> $_SERVER[$key]<td/>";
    echo "<td> $value<td/>";
    echo "<tr/>";
}

echo "<table/>";