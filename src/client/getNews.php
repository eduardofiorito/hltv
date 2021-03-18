<?php
$url = 'http://localhost/GitHub/hltv/src/server/getNews';

$client = curl_init($url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$result = objectToArray($result);

echo '<pre>';
var_dump($result);
echo '</pre>';

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
