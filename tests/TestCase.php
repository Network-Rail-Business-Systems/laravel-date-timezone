<?php

namespace NetworkRailBusinessSystems\LaravelDateTimezone\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use NetworkRailBusinessSystems\LaravelDateTimezone\LaravelDateTimezoneServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'NetworkRailBusinessSystems\\LaravelDateTimezone\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelDateTimezoneServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-date-timezone_table.php.stub';
        $migration->up();
        */
    }
}
