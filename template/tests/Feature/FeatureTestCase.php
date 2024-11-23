<?php

declare(strict_types=1);

namespace {{ camelcase (snakecase Vendor) }}\{{ camelcase (snakecase PackageName) }}\Tests\Feature;

use Carbon\CarbonImmutable;
use Illuminate\Foundation\Application;
use Illuminate\Routing\Router;
use Illuminate\Support\DateFactory;
use {{ camelcase (snakecase Vendor) }}\{{ camelcase (snakecase PackageName) }}\{{ camelcase (snakecase PackageName) }}ServiceProvider;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Orchestra\Testbench\TestCase as OrchestraTestbench;
{{- if AddSnapshotLib}}
use Spatie\Snapshots\MatchesSnapshots;
{{- end}}

abstract class FeatureTestCase extends OrchestraTestbench
{
    use MockeryPHPUnitIntegration;
    {{- if AddSnapshotLib}}
    use MatchesSnapshots;
    {{- end}}

    /**
     * Get package providers.
     *
     * @param Application $app
     *
     * @return array<int,class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            {{ camelcase (snakecase PackageName) }}ServiceProvider::class,
        ];
    }

    /**
     * Get application timezone.
     *
     * @param Application $app
     */
    protected function getApplicationTimezone($app): string
    {
        return 'Europe/Amsterdam';
    }

    /**
     * Define routes setup.
     *
     * @param Router $router
     */
    protected function defineRoutes($router): void
    {
        // Define Routes
    }

    /**
     * Define environment setup.
     *
     * @param Application $app
     */
    protected function getEnvironmentSetUp($app): void
    {
        // Define your environment setup.

        $app['config']['app.timezone'] = $this->getApplicationTimezone($app);

        DateFactory::use(CarbonImmutable::class);
    }

    {{- if AddSnapshotLib}}

    protected function assertSnapshotShouldBeCreated(string $snapshotFileName): void
    {
        if ($this->shouldCreateSnapshots()) {
            return;
        }
        static::fail(
            "Snapshot \"$snapshotFileName\" does not exist.\n" .
            "You can automatically create it by running \"composer update-test-snapshots\".\n" .
            'Make sure to inspect the created snapshot afterwards to ensure its correctness!',
        );
    }
    {{- end}}
}
