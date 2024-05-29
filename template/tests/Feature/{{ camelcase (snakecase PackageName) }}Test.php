<?php

declare(strict_types=1);

namespace {{ camelcase (snakecase Vendor) }}\{{ camelcase (snakecase PackageName) }}\Tests\Feature;

class {{ camelcase (snakecase PackageName) }}Test extends FeatureTestCase
{
    public function testExample(): void
    {
        $this->assertTrue(true);
    }
}
