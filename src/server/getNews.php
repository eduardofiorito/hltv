<?php
require_once "../../vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://hltv-api.vercel.app/',
]);

$response = $client->request('GET', '/api/news', [
    'query' => [
        'page' => '2',
    ]
]);

$body = $response->getBody();

$getNews = json_decode($body);

$getNews = objectToArray($getNews);

/*
echo '<pre>';
print_r($getNews);
echo '</pre>';
*/

function objectToArray($object)
{
    if (is_object($object)) {
        $object = get_object_vars($object);
    }

    if (is_array($object)) {
        return array_map(__FUNCTION__, $object);
    } else {
        return $object;
    }
}
