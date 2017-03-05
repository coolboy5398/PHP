<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-05
 * Time: 10:44
 */

echo "<pre>";
//var_dump($_SERVER);
echo "</pre>";
echo "<table border='1'>";
foreach ($_SERVER as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo "<table/>";
?>