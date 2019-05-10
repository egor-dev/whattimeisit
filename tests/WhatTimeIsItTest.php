<?php
declare(strict_types=1);

use Egor\WhatTimeIsIt;

class WhatTimeIsItTest extends \PHPUnit\Framework\TestCase
{
    public function testPlease(): void
    {
        $whatTimeIsIt = new WhatTimeIsIt();

        self::assertEquals(date('Y-m-d H:i:s'), $whatTimeIsIt->please());
    }
}
