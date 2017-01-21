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
//$aaa=&add;
//echo $aaa(2,3);

function checkInput($str)
{
    if (is_null($str)==true || $str=="")
    {
        return "请输入字符";
    }
    if (is_float($str)==false && is_int($str)==false){
        return "请输入数字";
    }
    echo $str."<br>";
    if (strlen($str)>25)
    {
      return "输入长度不能不能超过25";
    }
    return "OK";
}
echo  checkInput(1234567890123456789012345)."<br>";
echo $_SERVER['REMOTE_ADDR'].":" . $_SERVER["REMOTE_PORT"]."<br>";

echo 1,"Hellow World","<b>bold</b>";
print ("Hellow World");
printf("Hellow World %s","444")  ;
print_r("Hellow World") ;

printf("My name is %s %s。","55nav", "com"); // My name is 55nav com。
printf("My name is %1\$s %1\$s","55nav", "com"); // 在s前添加1\$或2\$.....表示后面的参数显示的位置，此行输出 My name is 55nav 55nav因为只显示第一个参数两次。
printf("My name is %2\$s %1\$s","55nav", "com"); // My name is com 55nav


