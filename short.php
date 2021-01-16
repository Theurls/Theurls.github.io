<?php
/**
 * 生成短链接口
 * 浪神社区QQ2720068292
 * http://域名/short.php?dwz=方式&url=长链接
 * 方式：tcn,urlcn,wechat,unu,sinaurl,suoim,mrwso
**/
$dwz=$_GET['dwz'];
$url=$_GET['url'];
if($url==NULL&&$dwz==NULL){
echo '不能留空!';
}else{
if($url!=NULL){
$langshen=$dwz($url);
echo $langshen;
}
}
function tcn($longurl) {
    $url='https://is.gd/api.php?longurl='.urlencode($longurl);
    $result=file_get_contents($url);
    if (!$result) {
        return '生成失败!';
    } else {
        return $result;
    }
}
function urlcn($longurl) {
    $url='http://auth.dddyun.com/api/short.php?dwz=urlcn&url='.urlencode($longurl);
    $result=file_get_contents($url);
    if (!$result) {
        return '生成失败!';
    } else {
        return $result;
    }
}
function wechat($longurl) {
    $url='http://auth.dddyun.com/api/short.php?dwz=wechat&url='.urlencode($longurl);
    $result=file_get_contents($url);
    if (!$result) {
        return '生成失败!';
    } else {
        return $result;
    }
}
function unu($longurl) {
    $url='http://auth.dddyun.com/api/short.php?dwz=unu&url='.urlencode($longurl);
    $result=file_get_contents($url);
    if (!$result) {
        return '生成失败!';
    } else {
        return $result;
    }
}
function sinaurl($longurl) {
    $url='http://auth.dddyun.com/api/short.php?dwz=sinaurl&url='.urlencode($longurl);
    $result=file_get_contents($url);
    if (!$result) {
        return '生成失败!';
    } else {
        return $result;
    }
}
function suoim($longurl) {
    $url='http://auth.dddyun.com/api/short.php?dwz=suoim&url='.urlencode($longurl);
    $result=file_get_contents($url);
    if (!$result) {
        return '生成失败!';
    } else {
        return $result;
    }
}
function mrwso($longurl) {
    $url='http://auth.dddyun.com/api/short.php?dwz=mrwso&url='.urlencode($longurl);
    $result=file_get_contents($url);
    if (!$result) {
        return '生成失败!';
    } else {
        return $result;
    }
}
?>