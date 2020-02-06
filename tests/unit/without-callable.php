<?php

declare(strict_types=1);

use Illuminate\Foundation\Application;
use NunoMaduro\LaravelAny\AnyServiceProvider;

$app = new Application();
$app->register(AnyServiceProvider::class);

it('returns false on empty collection', function (): void {
    assertFalse(collect()->any());
});

it('returns true on a collection with truthy values', function (): void {
    assertTrue(collect([1])->any());
});

it('returns false on a collection with non truthy values', function (): void {
    assertFalse(collect([0])->any());
});
