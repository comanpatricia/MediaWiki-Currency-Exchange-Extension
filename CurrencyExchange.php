<?php

if ( !defined( 'MEDIAWIKI' ) ) {
    die( 'This is a MediaWiki extension and must be run from within MediaWiki.' );
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.apilayer.com/fixer/latest?symbols=USD,GBP,EUR&base=CZK",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: text/plain",
    "apikey: XXXXXXXXXXXXX"
  ),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET"
));

$response = curl_exec($curl);
curl_close($curl);

header('Content-Type: application/json');
echo $response;
