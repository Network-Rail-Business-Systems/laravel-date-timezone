<?php

namespace NetworkRailBusinessSystems\LaravelDateTimezone\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as Orchestra;
use NetworkRailBusinessSystems\LaravelDateTimezone\LaravelDateTimezoneServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'NetworkRailBusinessSystems\\LaravelDateTimezone\\Tests\\Stubs\\'.class_basename($modelName).'Factory'
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

        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('data');
            $table->timestamps();
        });
    }
}
