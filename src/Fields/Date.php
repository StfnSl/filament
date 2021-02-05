<?php

namespace Filament\Fields;

class Date extends InputField
{
    public $config = [
        'altInput' => true,
    ];

    public function config(array $config)
    {
        $this->config = array_merge($this->config, $config);

        return $this;
    }
}