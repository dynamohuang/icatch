<?php
require dirname(__DIR__). '/vendor/autoload.php';
use Sunra\PhpSimple\HtmlDomParser;


$request = new \cURL\Request('http://go.cqmmgo.com/forum-5-1.html');
$request->getOptions()
    ->set(CURLOPT_TIMEOUT, 5)
    ->set(CURLOPT_RETURNTRANSFER, true)
    ->set(CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36');
$response = $request->send()->getContent();




$dom = HtmlDomParser::str_get_html($response);
var_dump($dom);