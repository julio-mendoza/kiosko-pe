<?php

namespace Kiosko\Landing\Infrastructure\Web\Controller;

use Kiosko\Landing\Application\UseCases\SettingsRetriever;

class HomeController
{
    public function __construct(private SettingsRetriever $settingsRetriever)
    {
    }

    public function __invoke()
    {
        $settings = $this->settingsRetriever->__invoke();
        return view('welcome', $settings);
    }
}
