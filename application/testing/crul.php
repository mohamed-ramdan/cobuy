<?php

/*

 * 
 * $c = curl_init('http://stackoverflow.com/questions/ask');
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
//curl_setopt(... other options you want...)

$html = curl_exec($c);

if (curl_error($c))
    die(curl_error($c));

// Get the status code
$status = curl_getinfo($c, CURLINFO_HTTP_CODE);

curl_close($c);
 * 
 * 
 *  */

$url = "https://www.google.com.eg";
$c = curl_init($url);
curl_setopt($c, CURLOPT_RETURNTRANSFER, TRUE);
$html = curl_exec($c);
if (curl_error($c))
    die(curl_error($c));

// Get the status code
$status = curl_getinfo($c, CURLINFO_HTTP_CODE);

curl_close($c);

var_dump($html);
exit();
