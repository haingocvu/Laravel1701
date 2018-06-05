<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $menu = [
        //     'menu 1',
        //     'menu 2'
        // ];
        //View::share(["menu"=>$menu]);//share all views.
        //share specific views
        View::composer(["admin.layout"], function($view){
            $menu = [
                'menu 1',
                'menu 2'
            ];
            $view->with(["menu"=>$menu]);
        });
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
