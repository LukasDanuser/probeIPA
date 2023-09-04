<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.zoom.us/v2/users/l.danuser@rafisa.ch/meetings",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\r\n  \"agenda\": \"My Meeting\",\r\n  \"start_time\": \"2023-09-05T09:30:00Z\",\r\n \"timezone\": \"Europe/Zurich\",\r\n \"default_password\": false,\r\n  \"duration\": 60,\r\n  \"password\": \"123456\"\r\n}",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer  eyJzdiI6IjAwMDAwMSIsImFsZyI6IkhTNTEyIiwidiI6IjIuMCIsImtpZCI6IjcxZWYwYWU5LTgxMzQtNGJmMi1hYTllLTMxNDdhMmUwZjgwMiJ9.eyJ2ZXIiOjksImF1aWQiOiI4M2Y5ZWU0YjEwZWIwMWM3OWI1OGZhZTAzNmU4OGY3ZCIsImNvZGUiOiJ4ZmFtTGxEVkFlUWF1cEZIakZ3UjNlWFQ0aEV1XzhIRXciLCJpc3MiOiJ6bTpjaWQ6czQzUkJob3hSamF3TEJCN2RzYnV1USIsImdubyI6MCwidHlwZSI6MCwidGlkIjowLCJhdWQiOiJodHRwczovL29hdXRoLnpvb20udXMiLCJ1aWQiOiJFNXh4cVgxd1NwcWdLUkhZc2lxLUtBIiwibmJmIjoxNjkzODA4NzU5LCJleHAiOjE2OTM4MTIzNTksImlhdCI6MTY5MzgwODc1OSwiYWlkIjoiVWlKUWd4enFTaGE3TzVwTnhTWUU2USJ9.FnN7G1iMQGhbvUI_Sz-GmwppadoRxwWp6B6vMsY5MhamPnXDwsflJJJ7HZ3k8t06LKzP-__TWpiZwNC2gO-nNg",
        "Content-Type: application/json"
    ),
));

$response = curl_exec($curl);
curl_close($curl);
$responseJSON = json_decode("[" . $response . "]", true);

echo $responseJSON[0]["join_url"];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://zoom.us/oauth/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\r\n \"client_id:\" \"s43RBhoxRjawLBB7dsbuuQ\",\r\n \"client_secret:\" \"JQ2nDt8lFZtynkT4R34sXUBLCXGO6btV\",\r\n \"grant_type:\" \"authorization_code\",\r\n \"code:\" \"4m3Z0Z\"\r\n}",
));
$respone = curl_exec($curl);
curl_close($curl);
echo $respone;
