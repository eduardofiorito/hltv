<?php
$url = 'http://localhost/GitHub/hltv/src/server/getResults';

$client = curl_init($url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$getResults = json_decode($response);

$getResults = objectToArray($getResults);

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
