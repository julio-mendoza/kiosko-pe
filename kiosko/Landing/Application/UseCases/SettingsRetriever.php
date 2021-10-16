<?php

namespace Kiosko\Landing\Application\UseCases;

use Kiosko\Landing\Domain\Entities\ConfigItem;
use Kiosko\Landing\Domain\Repositories\ConfigRepository;

class SettingsRetriever
{
    public function __construct(private ConfigRepository $configRepo)
    {
        
    }
    public function __invoke(): array
    {
        $configItems = $this->configRepo->getByType('Landing');
        $settings = array_reduce($configItems, fn($result, $configItem) => $this->mapToArray($configItem, $result), array());
        return $settings;
    }

    private function mapToArray(ConfigItem $configItem, array $items): array
    {
        $items[$configItem->getKey()] = $configItem->getValue();
        return $items;
    }
}