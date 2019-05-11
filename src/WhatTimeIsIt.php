<?php
declare(strict_types=1);

namespace Egor;

/**
 * Class WhatTimeIsIt
 *
 * @package Egor
 */
class WhatTimeIsIt
{
    public function please(): string
    {
        return (new \DateTime())->format('Y-m-d H:i:s');
    }
}
