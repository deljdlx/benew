<?php
require(__DIR__.'/../class/Space.php');


require(__DIR__.'/../class/DummyTrait.php');
require(__DIR__.'/../class/Hello.php');
require(__DIR__.'/../class/World.php');
require(__DIR__.'/../class/HelloWorld.php');



//=======================================================
$beNewSpace = new \BeNew\Space('BeNew', __DIR__.'/../class/');
$testSpace = new \BeNew\Space('Test', __DIR__);
$testSpace->inherit($beNewSpace);
//=======================================================
require(__DIR__.'/World.php');
require(__DIR__.'/HelloWorld.php');
//=======================================================



$realHello = new BeNew\Hello();
echo $realHello;


$realWorld = new BeNew\World();
echo $realWorld;
echo "\n";

//=======================================================
$hello = new \Test\Hello();
echo $hello;

$world = new \Test\World();
echo $world;
echo "\n";

//=======================================================
$realHelloWorld = new BeNew\HelloWorld();
echo $realHelloWorld;
echo "\n";


$helloWorld = new Test\HelloWorld();
echo $helloWorld;
echo "\n";










