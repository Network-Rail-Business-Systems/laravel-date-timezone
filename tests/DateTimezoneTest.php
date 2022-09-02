<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use NetworkRailBusinessSystems\LaravelDateTimezone\Tests\Stubs\Test;
use function Pest\Laravel\assertDatabaseHas;

beforeEach(function () {
    Config::set('app.timezone', 'UTC');
    Config::set('date-timezone.output-timezone', 'Europe/London');
    Carbon::setTestNow('2022-05-05 09:00:00');

    Test::factory()
        ->create([
            'data' => 'This is a test',
        ]);
});

it('it will persist date in database according to the app timezone', function () {
    assertDatabaseHas(Test::class, [
        'id' => 1,
        'created_at' =>  '2022-05-05 09:00:00',
        'updated_at' => '2022-05-05 09:00:00',
    ]);
});

it('will output date in a given timezone', function () {
    $carbonInstance = Test::query()->first()->created_at;

    expect($carbonInstance->timezoneName)
        ->toBe('Europe/London')
        ->and($carbonInstance->toDateTimeString())
        ->toBe('2022-05-05 10:00:00');
});

it('will update date in database according to the app timezone', function () {
    Carbon::setTestNow('2022-05-05 12:45:30');

    $model = Test::query()->first();

    $model->update([
        'data' => 'This is an update',
    ]);

    assertDatabaseHas(Test::class, [
        'id' => 1,
        'created_at' =>  '2022-05-05 09:00:00',
        'updated_at' => '2022-05-05 12:45:30',
    ]);
});
