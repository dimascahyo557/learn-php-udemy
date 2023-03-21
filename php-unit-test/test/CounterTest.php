<?php

namespace Dimascahyo\PhpUnitTest;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/**
 * Kalau ingin menjalankan satu method saja, gunakan:
 * `vendor/bin/phpunit.bat --filter 'ClassTest::testMethod' test/ClassTest.php`
 */
class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();
        $counter->increment();
        // echo $counter->getCounter() . PHP_EOL;
        Assert::assertEquals(1, $counter->getCounter());

        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());

        $counter->increment();
        self::assertEquals(3, $counter->getCounter());
    }

    // public function testOther()
    // {
    //     echo "Other" . PHP_EOL;
    // }

    /**
     * @test
     */
    public function increment()
    {
        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());
    }

    public function testFirst(): Counter
    {
        $counter = new Counter;
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());

        return $counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }
}