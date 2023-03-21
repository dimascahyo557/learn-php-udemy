<?php

namespace Dimascahyo\PhpUnitTest;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSuccess()
    {
        $person = new Person('Dimas');
        $this->assertEquals('Hello Cahyo, my name is Dimas', $person->sayHello('Cahyo'));
    }

    public function testException()
    {
        $person = new Person('Dimas');
        $this->expectException(\Exception::class);
        $person->sayHello(null);
    }
    
    public function testSayGoodBye()
    {
        $person = new Person('Dimas');
        $this->expectOutputString('Good bye Cahyo' . PHP_EOL);
        $person->sayGoodBye('Cahyo');
    }
}