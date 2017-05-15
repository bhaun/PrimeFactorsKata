<?php

namespace Test;

require __DIR__ . '/../vendor/autoload.php';

use PFK\Prime;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function one_test_to_rule_them_all()
    {
        $prime = new Prime();
        $this->assertInstanceOf(Prime::class, $prime, "Didn't get a Prime Class");
        $this->assertEquals(1,1); //Everything is right in the world.... Unless this fails.
    }
}
