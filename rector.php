<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php83\Rector\ClassMethod\AddOverrideAttributeToOverriddenMethodsRector;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
    ->withSkip([
        AddOverrideAttributeToOverriddenMethodsRector::class,
    ])
    ->withSets([
        LaravelSetList::LARAVEL_CODE_QUALITY,
        LaravelSetList::LARAVEL_COLLECTION,
    ])
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/bootstrap',
        __DIR__.'/config',
        __DIR__.'/public',
        __DIR__.'/resources',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations: true,
        privatization: true,
        earlyReturn: true,
        strictBooleans: true,
    )
    ->withPhpSets();
