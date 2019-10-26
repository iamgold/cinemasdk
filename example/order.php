<?php
use Exception;
use iamgold\cinema\OrderClient;

require __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/config.php';

$client = new OrderClient($config['order']);

$res = $client->clear([
    'session' => 'PHPSESSID=dt9f0c7ajcavdt92ht32tdm4i0'
]);
$body = $res->body;
$result = json_decode($body, true);
if (!$res->success)
    throw new Exception("Error Processing Request", 500);

var_dump($result);






