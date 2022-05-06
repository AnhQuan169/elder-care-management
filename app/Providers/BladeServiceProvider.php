<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class BladeServiceProvider extends ServiceProvider
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
        //
        Blade::if('hasrole',function($expression){
            if(Auth::user()){
                // if(Auth::user()->hasRole($expression)){
                if(Auth::user()->loaiTaiKhoan == $expression){
                    return true;
                }
            }
            return false;
        });
    }
}