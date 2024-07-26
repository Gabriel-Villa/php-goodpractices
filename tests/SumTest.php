<?php

namespace Pvilla\PhpGoodpractices\Tests;

use PHPUnit\Framework\TestCase;
use Pvilla\PhpGoodpractices\Sum;

class SumTest extends TestCase
{

    
    public function testCanSum()
    {
        $sum = new Sum();

        $result = $sum->apply(1, 5);

        $this->assertEquals(6, $result);
    }


}