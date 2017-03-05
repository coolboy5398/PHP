<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-05
 * Time: 10:31
 */
echo "<pre>";
var_dump($_GET);
echo "</pre>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";


//测试POST和GET销毁，REQUEST是否存在
unset($_POST);
unset($_GET);
echo "<pre>GET<br/>";
var_dump($_GET);
echo "</pre>";
echo "<pre>POST<br/>";
var_dump($_POST);
echo "</pre>REQUEST <br/>";
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";


//测试REQUEST销毁，POST和GETREQUEST是否存在

/*unset($_REQUEST);

echo "<pre>GET";
var_dump($_GET);
echo "</pre>";
echo "<pre>POST";
var_dump($_POST);
echo "</pre>REQUEST";
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";*/