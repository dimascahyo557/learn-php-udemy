<?php
namespace Dimascahyo557\BelajarPhpComposer;

class People {

    public function __construct(private string $name)
    {
        
    }

    function __toString()
    {
        return $this->name;
    }

    public function sayHello(string $name)
    {
        return "Hello $name, my name is $this->name ^^";
    }

}