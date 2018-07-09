<?php



require "vendor/autoload.php";

$access_token = 'xvNP5zvcZrvpJPBnpEJ5zFmz8wsHaXYynP5AcQ+UoNkRWKu/to1EYRZcJl/vbMP151iqPBeNdiC+F8PgEyNTGasA1jtcTnlJDDwIZhwbFNeZOqPHfWu16LyE61mcPJPMWclU0pIGWp4kByvSbgAz+gdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'dd5c621bbafdca83b638121ff5c5caad';

$pushID = 'U24c3daa53fdd9367081b74f41946e1f0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







