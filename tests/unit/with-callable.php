<?php

declare(strict_types=1);

use Illuminate\Foundation\Application;
use NunoMaduro\LaravelAny\AnyServiceProvider;

$app = new Application();
$app->register(AnyServiceProvider::class);

it('returns false on emtpy collection', function (): void {
    assertFalse(collect()->any(function () {
        return true;
    }));
});

it('returns false on non truthy condition', function (): void {
    assertFalse(collect([1])->any(function ($value) {
        return $value === 2;
    }));
});

it('returns true on truthy condition', function (): void {
    assertTrue(collect([1])->any(function ($value) {
        return $value === 1;
    }));
});
