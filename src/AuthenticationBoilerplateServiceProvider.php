<?php

namespace VoyagerAdmin\AuthenticationBoilerplate;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Manager\Plugins as PluginManager;

class AuthenticationBoilerplateServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\VoyagerAdmin\AuthenticationBoilerplate\AuthenticationBoilerplate::class);
    }

    public function register()
    {
        // ...
    }
}