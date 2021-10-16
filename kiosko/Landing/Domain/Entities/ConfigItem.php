<?php

namespace Kiosko\Landing\Domain\Entities;

class ConfigItem
{
    public function __construct(private String $type, private String $key, private String $value)
    {
        
    }

    public function getType(): String
    {
        return $this->type;
    }
    
    public function getKey()
    {
        return $this->key;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(String $value)
    {
        $this->value = $value;
    }
}
