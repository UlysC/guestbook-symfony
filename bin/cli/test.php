<?php
$url = 'https://phptrialapi.netlify.app/.netlify/functions/dummy';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


$resp = curl_exec($curl);
curl_close($curl);

var_dump($resp);

