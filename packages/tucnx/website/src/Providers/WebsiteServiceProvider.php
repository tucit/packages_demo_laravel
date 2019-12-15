<?php
namespace Tucnx\Website\Providers;

use Illuminate\Support\ServiceProvider;

class WebsiteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        var_dump('I created package successfully !!');
    }

    public function register()
    {

    }
}
