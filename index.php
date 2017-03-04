<?php

$user_IP = 'demoip'; // Your IP Address
$api_Key = 'demo'; // Your API Key

$request = 'https://api.geoip-api.com/api/v1/'.$user_IP.'/json/'.$api_Key;
$response = file_get_contents($request);
$decoding = json_decode($response);

echo $decoding->City;