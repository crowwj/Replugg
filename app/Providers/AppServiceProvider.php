<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{  
    public function register(): void {        }
    public function boot(): void
    {
    Schema::defaultStringLength(191);    
    Gate::define('admin', function (User $user) {
        return $user->role === 'admin'; 
    });

    Gate::define('seller', function (User $user) {
    return $user->role === 'seller' || $user->role === 'admin';
    });
    }


}
