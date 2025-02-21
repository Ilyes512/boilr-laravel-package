<?php

declare(strict_types=1);

namespace {{ camelcase (snakecase Vendor) }}\{{ camelcase (snakecase PackageName) }}\Tests\Feature;

class {{ camelcase (snakecase PackageName) }}Test extends FeatureTestCase
{
    public function testFeatureExample(): void
    {
        self::markTestSkipped('This is just a placeholder feature test');
    }
}
