<?php

declare(strict_types=1);

namespace NunoMaduro\LaravelAny;

use Illuminate\Support\ServiceProvider;

/**
 * @internal
 */
final class Any
{
    /**
     * Determine if any item from the collection passes the given truth test.
     */
    public static function invokable(): callable
    {
        return function (callable $callback = null): bool {
            $iterable = $this->getIterator();

            if (is_null($callback)) {
                $callback = function ($value): bool {
                    return (bool) $value;
                };
            }

            foreach ($iterable as $key => $value) {
                if ($callback($value, $key)) {
                    return true;
                }
            }

            return false;
        };
    }
}
