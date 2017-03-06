<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 12:40
 */
define("a",1);
define("b",2);
$str;
echo "a=".a.",b=".b."<br/>";
//echo "a=".a.",b=".b.",c=".c;
const c=1;
$str="c";
echo "a=".a.",b=".constant("b").",c=".constant($str);

/*if (b>1)
{
    const d=5;//语法错误，非顶层代码
}*/
echo Nosff;
echo"<br/>";
//魔术常量
echo __LINE__."<br/>";//当前行数
echo __FILE__."<br/>";//当前文件路径
echo __DIR__."<br/>";//当前文件所在目录路径