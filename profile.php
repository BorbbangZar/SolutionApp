<?php


$access_token = 'xvNP5zvcZrvpJPBnpEJ5zFmz8wsHaXYynP5AcQ+UoNkRWKu/to1EYRZcJl/vbMP151iqPBeNdiC+F8PgEyNTGasA1jtcTnlJDDwIZhwbFNeZOqPHfWu16LyE61mcPJPMWclU0pIGWp4kByvSbgAz+gdB04t89/1O/w1cDnyilFU=';

$userId = 'U24c3daa53fdd9367081b74f41946e1f0';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

