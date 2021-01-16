<?php
error_reporting(0);
header('Content-type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
//返回结果
function returnResult($url)
{
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        $res_data['status'] = 1;
        $res_data['url'] = $url;
    } else {
        $res_data['status'] = 0;
        $res_data['msg'] = '获取失败';
    }
    exit(json_encode($res_data));
}
$long_url=urlencode($_GET['url']);
if ($_GET['type'] == 1) {
   $short_url = file_get_contents("https://is.gd/api.php?longurl=" . $long_url);
} elseif ($_GET['type'] == 2) {
   $short_url = file_get_contents("https://u.nu/api.php?action=shorturl&format=simple&url=" . $long_url);
} elseif ($_GET['type'] == 3) {
    $short_url = file_get_contents("https://tinyurl.com/api-create.php?url=" .$long_url);
} else {
     $short_url = file_get_contents("https://is.gd/api.php?longurl=" . $long_url);
}
returnResult($short_url);
?>