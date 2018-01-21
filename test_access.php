<?php
/**
 * Created by PhpStorm.
 * User: tail
 * Date: 2018/1/21
 * Time: 下午10:25
 */
$json = file_get_contents("./access_token.txt");
echo $json;
$array = json_decode($json,true);
echo "<pre>";
print_r($array);