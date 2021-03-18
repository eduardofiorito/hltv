<?php
require_once "../../vendor/autoload.php";
require_once "api.php";

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://hltv-api.vercel.app/',
    'verify' => false
]);

$response = $client->request('GET', '/api/results');

$body = $response->getBody();
$getResults = json_decode($body);
$getResults = objectToArray($getResults);
process($getResults);

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
