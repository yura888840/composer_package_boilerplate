<?php

declare(strict_types=1);

namespace Deepvibe\PackageName\Tests\Unit;

use Deepvibe\PackageName\MyCoolInterface;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * Class PipelineTest
 * @package Deepvibe\PackageName\Tests\Unit
 * @author  Yurii Oblovatskyi yuriyobl@gmail.com>
 */
class MyCoolServiceTest  extends TestCase
{
    use ProphecyTrait;

    public function testOne()
    {
        $mock = $this->prophesize(MyCoolInterface::class)->reveal();

        self::assertTrue(true);
    }
}
