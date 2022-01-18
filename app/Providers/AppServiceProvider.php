<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Contact_us;
use App\Models\News;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

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
        view()->share('users',User::orderBy('created_at','DESC')->whereDate('created_at', today())->limit(25)->get());
        view()->share('contactUsCount',Contact::where('is_read',0)->orderBy('id','desc')->count());
        view()->share('contacts',Contact::orderBy('created_at','DESC')->limit(8)->get());
        view()->share('news_paper',News::status(1)->orderBy('created_at','DESC')->limit(2)->get());
        view()->share('settings',Setting::orderBy('id','desc')->latest()->get());
        view()->share('setting',Setting::first());
    }
}
