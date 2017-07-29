<?php
//this demo only take test. suggest you use composer
require_once "../src/Sensitive.php";
$interference = ['&', '*'];
$filename = './words.txt';
$sensitive = new \Yankewei\LaravelSensitive\Sensitive();
$sensitive->interference($interference); //添加干扰因子
$sensitive->addWords($filename);
$txt = "我说的日本册,滚&蛋不是。。。";
$words = $sensitive->filter($txt);
var_dump($words);//string(37) "我说的日本册,***不是。。。"