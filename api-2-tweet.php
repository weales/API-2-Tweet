<?php
require_once "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$curl = curl_init();
//ENTER API URL below
curl_setopt_array($curl, [
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

  //Decodes to json
  $decoded = json_decode($response, true);
}

// Enter your Twitter credentials below
define('CONSUMER_KEY', 'YOUR_CONSUMER_KEY');
define('CONSUMER_SECRET', 'YOUR_CONSUMER_SECRET');
define('ACCESS_TOKEN', 'YOUR_ACCESS_TOKEN');
define('ACCESS_TOKEN_SECRET', 'YOUR_ACCESS_TOKEN_SECRET');

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

//Below is a sample tweet that's using (https://dummyjson.com/products/1) as an exmaple
$status = "
Product Title: ". $decoded['title'] ." \n\n
Description: ". $decoded['description'] ." \n\n
Price: $". $decoded['price'] ." \n\n
Category: $". $decoded['category'] ." \n\n
";

$post_tweets = $connection->post("statuses/update", ["status" => $status]);