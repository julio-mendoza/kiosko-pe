<?php

namespace Kiosko\Landing\Infrastructure\Repositories\Fake;

use Kiosko\Landing\Domain\Entities\ConfigItem;
use Kiosko\Landing\Domain\Repositories\ConfigRepository;

class TestConfigItemRepository implements ConfigRepository
{
    public function getByName(string $name): ConfigItem
    {
        return new ConfigItem('Landing', $name, 'Some Value');
    }

    public function getByType(string $type): array
    {
        $settings = array();
        array_push($settings, new ConfigItem('Landing', 'title', 'Kiosko.pe'));
        array_push($settings, new ConfigItem('Landing', 'home', 'Kiosko.pe'));
        return $settings;
    }
}