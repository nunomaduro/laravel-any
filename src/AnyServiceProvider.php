<?php

declare(strict_types=1);

namespace NunoMaduro\LaravelAny;

use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\ServiceProvider;

/**
 * @internal
 */
final class AnyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        parent::register();

        Collection::macro('any', Any::invokable());
        LazyCollection::macro('any', Any::invokable());

        Collection::proxy('any');
    }
}
