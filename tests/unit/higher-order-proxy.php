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

it('can proxy the call and evaluate property checks', function (): void {
    $collection = collect([new ExampleProxyTarget]);

    assertFalse($collection->any->falseProperty);
    assertTrue($collection->any->trueProperty);
});

class ExampleProxyTarget
{
    public $trueProperty = true;
    public $falseProperty = false;

    public function false(): bool
    {
        return false;
    }

    public function true(): bool
    {
        return true;
    }
}
