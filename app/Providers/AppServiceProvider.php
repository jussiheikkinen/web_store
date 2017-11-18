<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        *Laravel 5.4 made a change to the default database character set,
        *and it’s now utf8mb4 which includes support for storing emojis.
        *This only affects new applications and as long as you are running MySQL v5.7.7 and higher you do not need to do anything.
        *For those running MariaDB or older versions of MySQL you may hit this error when trying to run migrations:
        */
        Schema::defaultStringLength(191);

        //Share gategories to menu
        try {
          $categories = Category::all();
          View::share(['categories'=>$categories, 'title'=>'Laravel']);
        } catch (\Exception $e) {
          View::share(['categories'=>[], 'title'=>'Laravel']);
        }

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
