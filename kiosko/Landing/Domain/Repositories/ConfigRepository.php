<?php

namespace Kiosko\Landing\Domain\Repositories;

use Kiosko\Landing\Domain\Entities\ConfigItem;

interface ConfigRepository
{
    public function getByName(String $name): ConfigItem;

    public function getByType(String $type): array;
}