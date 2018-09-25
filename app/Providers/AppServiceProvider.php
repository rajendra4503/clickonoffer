<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Route;
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
        //date format
        $date_format = "d-m-Y";
        View::share('date_format', $date_format);
        //
        $controllers = [];

        foreach (Route::getRoutes()->getRoutes() as $route) {
            $action = $route->getAction();
            
            if (array_key_exists('controller', $action)) {
                // You can also use explode('@', $action['controller']); here
                // to separate the class name from the method
                if (str_contains($action['controller'], '@index')) {
                    $step1 = str_replace('Modules\Admin\Http\Controllers', '', $action['controller']);
                    $step2 = str_replace('@index', '', $step1);
                    $step3 = str_replace('Controller', '', $step2);

                    $notArr = ['AdminLogin','Auth'];

                    if (in_array(ltrim($step3, '"\"'), $notArr)) {
                        continue;
                    } else {
                        $controllers[] = ltrim($step3, '"\"');
                    }
                }
            }
        }
        array_pop($controllers);

        View::share('controllers', $controllers);
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
