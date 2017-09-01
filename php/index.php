<?php

// require './vendor/autoload.php';

// $client = new \GuzzleHttp\Client();

// // $client = new \GuzzleHttp\Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), ));
// $client = new \GuzzleHttp\Client(['verify' => false]);
// // $client->setHttpClient($client);

// echo "<pre>";

// var_dump($client);
// $res = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
// // $client->setDefaultOption('verify', false);
// echo "<hr>";
// echo $res->getStatusCode();
// echo "<hr>";
// // 200
// echo $res->getHeaderLine('content-type');
// echo "<hr>";
// // 'application/json; charset=utf8'
// echo $res->getBody();
// '{"id": 1420053, "name": "guzzle", ...}'

// // Send an asynchronous request.
// $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
// $promise = $client->sendAsync($request)->then(function ($response) {
//     echo 'I completed! ' . $response->getBody();
// });
// $promise->wait();



// $client = new GuzzleHttp\Client();

// $client = new GuzzleHttp\Client(['curl' => [CURLOPT_SSL_VERIFYPEER => false]]);
// $client = new GuzzleHttp\Client(['verify' => false]);
// // $client->setDefaultOption('verify',false);
// // $client->
// var_dump($client);



// function isValidId($id)
// {

//     if ((is_string($id) || is_numeric($id)) && strlen($id) > 0) {
//         return true;
//     }

//     return false;
// }
// $a = null;
// $b = isValidId($a);
// var_dump($b);
/*

class test1 {
	public $name = 1 + 2;
}
$a = new test1;
var_dump($a);*/
/**
* 
*/
// class test
// {
// 	public $name = <<<AAA
// test
// AAA;	
	
// }

// $test = new test();
// var_dump($test);

$str = "我是中国人啊 啊啊啊 啊啊啊";
$lenght = strlen($str);
var_dump($lenght);
echo "<hr>";

$a = mb_substr($str, 3, 6);
var_dump($a);