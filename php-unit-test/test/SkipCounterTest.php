<?php

namespace Dimascahyo\PhpUnitTest;

use PHPUnit\Framework\TestCase;

class SkipCounterTest extends TestCase
{
    public function testIncomplete()
    {
        $counter = new Counter();
        $this->assertEquals(0, $counter->getCounter());
        $this->markTestIncomplete("Belum kelar bang");
        echo "kode baris ini tidak dibaca" . PHP_EOL;
    }

    public function testSkipped()
    {
        $counter = new Counter();
        $this->assertEquals(0, $counter->getCounter());
        $this->markTestSkipped("Skip dulu ah");
        echo "kode baris ini tidak dibaca" . PHP_EOL;
    }

    /**
     * Skip berdasarkan kondisi
     * requires OSFAMILY Windows
     * requires OSFAMILY Darwin      (mac os)
     * 
     * @requires OSFAMILY Linux
     */
    public function testOnlyLinux()
    {
        $this->assertTrue(true, "Only in linux");
    }

    /**
     * @requires PHP >= 8
     * @requires OSFAMILY Windows
     */
    public function testOnlyForWindowsAndPHP8()
    {
        $this->assertTrue(true, "Only for windows and php 8");
    }
}