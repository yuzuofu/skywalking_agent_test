<?php

require __DIR__.'/vendor/autoload.php';

$client = new \GuzzleHttp\Client();
for ($i = 0; $i < 1000; $i++) {
    try {
        $client->request('GET', 'https://adasdasdas.examp.net');
    } catch (\Exception $exception) {
        echo $exception->getMessage(), PHP_EOL;
    }

}
exit();
