<?php

namespace NetworkRailBusinessSystems\LaravelDateTimezone\Casts;

use DateTimeInterface;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Carbon;

class DateTimezone implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        return Carbon::parse($value)
            ->setTimezone(
                config('date-timezone.output-timezone')
            );
    }

    public function set($model, $key, $value, $attributes)
    {
        $instance = is_a($value, DateTimeInterface::class) === false
            ? Carbon::parse($value)
            : Carbon::instance($value);

        return $instance->toDateTimeString();
    }

}
