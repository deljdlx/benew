<?php
require(__DIR__.'/../source/class/Space.php');


require(__DIR__.'/class/RootDummyTrait.php');

require(__DIR__.'/class/RootHelloWorld.php');
require(__DIR__.'/class/RootHello.php');
require(__DIR__.'/class/RootWorld.php');


require(__DIR__.'/class/Hello.php');
require(__DIR__.'/class/HelloWorld.php');



//=======================================================
$beNewSpace = new \Phi\Experiment\Space('Root', __DIR__);
$testSpace = new \Phi\Experiment\Space('Test', __DIR__);
$testSpace->inherit($beNewSpace);
//=======================================================



echo "===========================\n";
echo "Test Hello from Root namespace\n";
$realHello = new Root\Hello();
echo $realHello;
echo PHP_EOL;



echo "===========================\n";
echo "Test World from Root namespace\n";
$realWorld = new Root\World();
echo $realWorld;
echo PHP_EOL;

echo "===========================\n";
echo "Test HelloWorld from Root namespace\n";
$realHelloWorld = new Root\HelloWorld();
echo $realHelloWorld;
echo PHP_EOL;

//=======================================================

echo "===========================\n";
echo "Test Hello from Test namespace\n";
$hello = new \Test\Hello();
echo $hello;
echo PHP_EOL;


echo "===========================\n";
echo "Test World from Test namespace\n";
$world = new \Test\World();
echo $world;
echo PHP_EOL;



echo "===========================\n";
echo "Test HelloWorld from Test namespace\n";
$helloWorld = new Test\HelloWorld();
echo $helloWorld;
echo PHP_EOL;










