<?php



require "vendor/autoload.php";

$access_token = 'RDmXSeOkIzQMyB8FAiDckta+G018VANio23X5NZEgaUDxFQua6qbsTDcK+L5hQkvURRIyjQvCldEB8v9neIbm2TB3QlLtaiaJ5m2D6sW3jVyzEkYd+nP7tjXO4j0wfLe5mXumi9yjgK3zkkfzFQHYwdB04t89/1O/w1cDnyilFU=
';

$channelSecret = 'a7a936d7916d4ac78bd46ef2a9f2fdf9';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







