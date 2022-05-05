<?php

namespace NetworkRailBusinessSystems\LaravelDateTimezone\Tests\Stubs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NetworkRailBusinessSystems\LaravelDateTimezone\Casts\DateTimezone;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
    ];

    protected $casts = [
        'created_at' => DateTimezone::class,
        'updated_at' => DateTimezone::class,
    ];
}
