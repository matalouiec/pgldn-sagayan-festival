<?php

namespace psfc\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use psfc\Category as Category;
use psfc\Policies\AdminPolicy as AdminPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'psfc\Model' => 'psfc\Policies\ModelPolicy',
        Category::class => AdminPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('admin-only', function ($user) {
            if($user->is_admin == 1){
                return true;
            }
            return false;
        });
    }
}
