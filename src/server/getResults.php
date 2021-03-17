<?php
require_once "../../vendor/autoload.php";

use GuzzleHttp\Client;
 
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://hltv-api.vercel.app/',
]);

$response = $client->request('GET', '/api/results', [
    'query' => [
        'page' => '2',
    ]
]);
 
 
$body = $response->getBody();
$arr_body = json_decode($body);
echo '<pre>';
print_r($arr_body);
echo '</pre>';
