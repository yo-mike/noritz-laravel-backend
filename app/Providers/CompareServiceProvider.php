<?php

namespace App\Providers;

use App\Domain\OfficeAddin\Http\Livewire\Taskpane;
use App\Domain\Website\Products\Http\Livewire\Compares;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class CompareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        Livewire::component(Compares::class);
    }
}
