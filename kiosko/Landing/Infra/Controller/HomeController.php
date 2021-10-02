<?php

namespace Kiosko\Landing\Infra\Controller;

class HomeController
{
    public function __construct()
    {
    }

    public function __invoke()
    {
        return view('welcome');
    }
}
