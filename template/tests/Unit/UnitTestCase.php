<?php

declare(strict_types=1);

namespace {{ camelcase (snakecase Vendor) }}\{{ camelcase (snakecase PackageName) }}\Tests\Unit;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

abstract class UnitTestCase extends PHPUnitTestCase
{
    use MockeryPHPUnitIntegration;
}
