<?php
$curl = curl_init();

curl_setopt_array($curl, [
  //Enter API URL below
  CURLOPT_URL => "https://dummyjson.com/products/1",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {

  //decodes to json
  $decoded = json_decode($response, true);
}
print_r($decoded);