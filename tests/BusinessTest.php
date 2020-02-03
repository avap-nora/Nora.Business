<?php
declare(strict_types=1);

namespace Nora\Business;

use PHPUnit\Framework\TestCase;

class BusinessTest extends TestCase
{
    public function testIsTrue()
    {
        $this->assertInstanceOf(Business::class, new Business());
    }
}
