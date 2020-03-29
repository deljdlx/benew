<?php


namespace Root;

class HelloWorld
{
    use DummyTrait;

    public function __toString()
    {
        $hello = new Hello();
        $world = new World();

        return (string)$hello.' '.(string) $world;
    }
}