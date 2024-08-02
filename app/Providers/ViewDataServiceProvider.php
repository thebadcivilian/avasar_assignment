<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use DB;
use Auth;

class ViewDataServiceProvider extends ServiceProvider
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
        // view()->composer('*', function ($view) {
        //     $user = auth()->user();
        //     $company = DB::table('companies')->first();
        //     $topMenu = DB::table('posts')->where('post_type', 'Top Menu')->orderby('post_priority', 'asc')->get();
        //     $bottomMenu = DB::table('posts')->where('post_type', 'Bottom Menu')->orderby('post_priority', 'asc')->get();

        //     $view
        //         ->with('user', $user)
        //         ->with('company', $company)
        //         ->with('topMenu', $topMenu)
        //         ->with('bottomMenu', $bottomMenu);
        // });
    }
}
