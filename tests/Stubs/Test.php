<?php

namespace NetworkRailBusinessSystems\LaravelDateTimezone\Tests\Stubs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NetworkRailBusinessSystems\LaravelDateTimezone\HasTimezoneDefaults;

class Test extends Model
{
    use HasFactory, HasTimezoneDefaults;

    protected $fillable = [
        'data',
    ];
}
