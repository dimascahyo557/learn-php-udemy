<?php

namespace Dimascahyo\PhpUnitTest;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;

    /**
     * Fixture setUp
     * dijalankan sebelum unit test dijalankan
     *  (!!! Fixture ini akan di eksekusi setiap sebelum method test di panggil. Jadi jika ada 3 method test, maka fixture ini akan dipanggil sebanyak 3 kali !!!)
     */
    protected function setUp(): void
    {
        // $this->person = new Person('Dimas');
        // echo "Setup" . PHP_EOL;
    }
    
    /**
     * Annotation before berfungsi seperti fixture setUp
     * 
     * @before
     */
    public function createPerson()
    {
        // echo "Setup (@before)" . PHP_EOL;
        $this->person = new Person('Dimas');
    }
    
    /**
     * Fixture after
     * dipanggil setiap selesai menjalankan test case
     */
    protected function tearDown(): void
    {
        // echo "Tear down" . PHP_EOL;
    }
    
    /**
     * Annotation after berfungsi seperti fixture tearDown
     * 
     * @after
     */
    public function after()
    {
        // echo "Tear down (@after)" . PHP_EOL;
    }

    public function testSuccess()
    {
        $this->assertEquals(
            'Hello Cahyo, my name is Dimas',
            $this->person->sayHello('Cahyo')
        );
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }
    
    public function testSayGoodBye()
    {
        $this->expectOutputString('Good bye Cahyo' . PHP_EOL);
        $this->person->sayGoodBye('Cahyo');
    }
}