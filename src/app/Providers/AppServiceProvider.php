<?php

namespace Gerenciador\Providers;

use Illuminate\Support\ServiceProvider;

use Gerenciador\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*User::creating(function ($user) {
            if ( ! $user->get()->isValid()) {
                return false;
            }
        });
        Blade::directive('date'), function($expression){
            return "{{ with{$expression}->format(Y-m-d); }}"
        }*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
