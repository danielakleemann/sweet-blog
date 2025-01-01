<?php

/*
 * This file is part of Sweet Blog.
 *
 * Copyright (c) 2025 Daniela Kleemann <dk@webcodingcafe.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversNothing]
final class SampleTest extends TestCase
{
    #[TestWith([true])]
    public function testAlwaysEvaluatesToTrue(bool $condition): void
    {
        self::assertTrue($condition);
    }
}
