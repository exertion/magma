<?php

namespace App\Providers;

use Spotlight\Administration\Settings;

class SettingServiceProvider
{
    /**
     * Indicates if the plugin will have a settings page.
     *
     * @var bool
     */
    protected $enabled = true;

    public function __construct()
    {
        new Settings($this->enabled);
    }

    /**
     * Configure the settings page declaring tabs and options.
     *
     * @return void
     */
     public function booted()
     {
        Settings::tab('General Settings')
                ->option([ 'name' => 'First Field', 'type' => 'text', 'description' => 'Hey, this is an example text field!' ])
                ->option([ 'name' => 'Second Field', 'default' => 'A default value!' ])
                ->option([ 'name' => 'Checkbox', 'type' => 'checkbox', 'description' => 'Tick this box for no reason!' ]);

        Settings::tab('Additional Settings', 'additional')
            ->option([ 'name' => 'Drop-Down', 'type' => 'select', 'options' => [ 'first' => 'First Option', 'second' => 'Second Option' ] ]);

        Settings::init();
     }
}
