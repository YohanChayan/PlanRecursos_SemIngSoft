<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-admin', function(User $user){
            return $user->role == '0';
        });

        Gate::define('manage-chief', function(User $user){
            return $user->role == '1';
        });

        Gate::define('manage-employee', function(User $user){
            return $user->role == '2';
        });

        //
    }
}
