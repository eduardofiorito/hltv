<?php
header("Content-Type: application/json");

function process($body)
{
    if (empty($body))
    {
        response('HTTP/1.1 400 Bad Request', NULL);
    }
    else
    {
        response('HTTP/1.1 200 OK', $body);
    }
}

function response($header, $body)
{
    header($header);
    $json_response = json_encode($body);
    echo $json_response;
}
