<?php

declare(strict_types=1);

use Illuminate\Foundation\Application;
use NunoMaduro\LaravelAny\AnyServiceProvider;

$app = new Application;
$app->register(AnyServiceProvider::class);

it('can proxy method calls to collection item', function (): void {
    $collection = collect([new ExampleProxyTarget]);

    assertFalse($collection->any->false());
    assertTrue($collection->any->true());
});

class ExampleProxyTarget
{
    public function false(): bool
    {
        return false;
    }

    public function true(): bool
    {
        return true;
    }
}
