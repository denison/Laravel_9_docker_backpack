<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Backpack\PermissionManager\app\Http\Controllers\UserCrudController;
use App\Http\Controllers\Admin\Auth\UserCrudController as UserCrud;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserCrudController::class, UserCrud::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
