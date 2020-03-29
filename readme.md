# Phi experimentation : namespace inheritance


```php
//=======================================================
//register "Root namespace";
$beNewSpace = new \Phi\Experiment\Space('Root', __DIR__);

//Register Test namespace
$testSpace = new \Phi\Experiment\Space('Test', __DIR__);

//Declaring Test namespace extends Root namespace
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


//Test\World() class does not exist in Test namespace, but it will be loaded from parent namespace (root)
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

```
