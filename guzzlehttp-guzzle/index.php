<?php
require_once __DIR__.'/vendor/autoload.php';

//Guzzle is a PHP HTTP client library 
// https://docs.guzzlephp.org/en/stable/overview.html

// symfony/var-dumper
// The VarDumper component provides mechanisms for walking through any arbitrary PHP variable. It provides a better dump() function that you can use instead of var_dump().
// dump($variable);

echo "<h3 style='text-align:center'>guzzlehttp/guzzle package</h3>";


$client = new \GuzzleHttp\Client();

// get request
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/10');
// $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
$result = json_decode($response->getBody());
// echo $response->getStatusCode(); // 200
// echo $response->getHeaderLine('content-type'); // application/json; charset=utf-8

// symfony varDumper component
dump($result);


// post request
$data = [ "userId" => 1,
"title" => "optio molestias id quia eum",
"body" => "quo et expedita modi cum officia vel magni"
];

$response = $client->request('POST', 'https://jsonplaceholder.typicode.com/posts', ['form_params' => $data]);
$result = json_decode($response->getBody());
// dump($result); 







