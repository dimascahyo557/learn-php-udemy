<?php

namespace Dimascahyo\PhpUnitTest;

use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase
{
    private static Counter $counter;

    /**
     * Sharing fixture.
     * method ini mirip seperti __construct
     */
    public static function setUpBeforeClass(): void 
    {
        // self::$counter = new Counter;
    }

    /**
     * @beforeClass
     */
    public static function initCounter(): void 
    {
        self::$counter = new Counter;
    }

    public function testFirst()
    {
        self::$counter->increment();
        $this->assertEquals(1, self::$counter->getCounter());
    }

    public function testSecond()
    {
        self::$counter->increment();
        $this->assertEquals(2, self::$counter->getCounter());
    }

    /**
     * Sharing fixture.
     * method ini mirip seperti __destruct
     */
    public static function tearDownAfterClass(): void
    {
        // echo "Unit test selesai" . PHP_EOL;
    }

    /**
     * @afterClass
     */
    public static function afterClass(): void 
    {
        echo "Unit test selesai" . PHP_EOL;
    }
}