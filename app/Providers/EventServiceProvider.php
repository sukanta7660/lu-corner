<?php

namespace App\Providers;

use App\Blog;
use App\Blogcmt;
use App\ProductComment;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Auth;
use App\ProductCategory;
use App\Blogcat;
use App\Departments;
use App\Product;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        ProductCategory::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });

        ProductCategory::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });


         Blogcat::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });

        Blogcat::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });


        Departments::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });

        Departments::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });
         Product::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });

        Product::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });
        Blog::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });

        //comment
        ProductComment::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });
        Blogcmt::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });
    }
}
