<?php

namespace Kiosko\Landing\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use Kiosko\Landing\Domain\Repositories\ConfigRepository;
use Kiosko\Landing\Infrastructure\Repositories\Fake\TestConfigItemRepository;

class LandingServiceProvider extends ServiceProvider
{
    public $bindings = [
        ConfigRepository::class => TestConfigItemRepository::class
    ];
}
