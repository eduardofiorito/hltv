<?php
require_once "../../vendor/autoload.php";
require_once "api.php";

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://hltv-api.vercel.app/',
    'verify' => false
]);

$response = $client->request('GET', '/api/news');

$body = $response->getBody();

$getNews = json_decode($body);

// guarda os dados em um array associativo
$getNews = objectToArray($getNews);

// envia os dados para a api processar
process($getNews);


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
