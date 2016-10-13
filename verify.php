<?php
$access_token = 'hThRa/uPs1pCP8mShplBFatg/YflI8k7OjlsaDCV4QKBkOD8r66D5ozeRlTCCa0wdUZLsWPcJSMeqJhmc0965lQ1QRtzPoeYQQEgKqJa3Ako5SEyleSTuqW8nd5Uhx3a6cM/MTN2uJiEbIVoH+GF5QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;