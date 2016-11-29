<?php
$access_token = 'CTeYGYeTJDqtc06xBeTkoS8OhHtfUvQK4YgDRzHdUFomQtAiiaVxjv2wI+RdPqoHWnJ/ZBDMr4qEd/DKWmQgyyKdSHI0jT4SY/sCTixMuLEaUhHnnIhg//9SwJorJTOlT4pmwvhA3xb4slkvEy4vOgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>