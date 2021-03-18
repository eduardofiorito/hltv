<?php
$url = 'http://localhost/GitHub/hltv/src/server/getNews';

$client = curl_init($url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$getNews = json_decode($response);

$getNews = objectToArray($getNews);

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
