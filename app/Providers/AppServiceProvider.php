<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
<<<<<<< HEAD
        $cate= Category::all();
        View::share('cate', $cate);
=======
        $Cate= Category::all();
       View::share('cate', $Cate);
>>>>>>> 6ad54452f3b7ee77da330af7e279f3f8694f37e0
    }
}
