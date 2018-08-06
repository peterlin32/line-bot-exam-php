<?php



require "vendor/autoload.php";

$access_token = 'HVyK4PISizBVaO4VGBLTtzTOKkfHlxpgX5Pc6gRnUh8brak0E6feaE1sTzR8cMrK3VDvlboPTzn3PTg4uj+74fNdiBMnTn7mBIJRI0TwoBhKR6mIAiYMR7q8dLigxNOYdzBytNrpUsw3HmjjInywwQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '48cb7931e52e243416f7cf59157c2bf6';

$pushID = 'U6b969f34049907517dd5260a7890d469';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







