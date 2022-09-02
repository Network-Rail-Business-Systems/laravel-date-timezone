<?php

namespace NetworkRailBusinessSystems\LaravelDateTimezone;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Carbon;

trait HasTimezoneDefaults
{
    protected function createdAt(): Attribute
    {
        return Attribute::get(fn ($value) => $this->formatValue($value));
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::get(fn ($value) => $this->formatValue($value));
    }

    protected function formatValue($value): Carbon
    {
        return Carbon::parse($value)
            ->setTimezone(
                config('date-timezone.output-timezone')
            );
    }
}
