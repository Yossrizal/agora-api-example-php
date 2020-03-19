<?php 

//Generate from postman

$channel_name = 'channel_name';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.agora.io/dev/v1/channel/user/526d0e7768b14eec9dbbcd8a1027f140/".$channel_name,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic *AUTH CODE*="
    ),
  ));

$response = curl_exec($curl);

curl_close($curl);

$response = json_decode($response);


?>
