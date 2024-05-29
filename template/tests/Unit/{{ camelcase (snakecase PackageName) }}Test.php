<?php

declare(strict_types=1);

namespace {{ camelcase (snakecase Vendor) }}\{{ camelcase (snakecase PackageName) }}\Tests\Unit;

class {{ camelcase (snakecase PackageName) }}Test extends UnitTestCase
{
    public function testExample(): void
    {
        $this->assertTrue(true);
    }
}
