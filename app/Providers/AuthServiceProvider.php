<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Gate;
use Illuminate\Support\Facades\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('isAdmin',function($user){
              return $user->role == 'admin';
        });

        Gate::define('isEmployee',function($user){
            return $user->role == 'employee';
        });
    }
}
