<?php
/**
 * Created by PhpStorm.
 * User: tail
 * Date: 2018/1/21
 * Time: 下午9:19
 */
$appid = 'wx665f4d671028781f';
$secret = 'e29588ce7b1f36921d0f5fc4ee186979';
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$secret;
//初始化
$ad = curl_init();
//设置选项，包括URL
curl_setopt($ad, CURLOPT_URL, "http://www.jb51.net");
curl_setopt($ad, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ad, CURLOPT_HEADER, 0);
//执行并获取HTML文档内容
$output = curl_exec($ad);
//释放curl句柄
curl_close($ad);
//写入获得的数据
file_put_contents("./access_token.txt",$output);

