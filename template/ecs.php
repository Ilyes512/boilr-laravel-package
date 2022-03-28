<?php

declare(strict_types=1);

use SlevomatCodingStandard\Sniffs\Classes\ClassStructureSniff;
use SlevomatCodingStandard\Sniffs\Functions\StaticClosureSniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSniff;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/vendor/ilyes512/code-style/ecs.php');

    $containerConfigurator
        ->parameters()
        ->set(Option::PATHS, [
            __DIR__ . '/src',
            __DIR__ . '/config',
            __DIR__ . '/tests',
            __DIR__ . '/ecs.php',
        ])
        ->set(Option::SKIP, [
            StaticClosureSniff::class . '.ClosureNotStatic' => [__DIR__ . '/tests'],
            ClassStructureSniff::class . '.IncorrectGroupOrder' => [__DIR__ . '/tests'],
            UnusedParameterSniff::class . '.UnusedParameter' => [__DIR__ . '/tests'],
            ParameterTypeHintSniff::class . '.MissingNativeTypeHint' => [__DIR__ . '/tests/Feature/TestCase.php'],
        ]);
};
