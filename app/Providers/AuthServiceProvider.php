<?php

namespace App\Providers;

// namespace App\Policies;


use App\Policies\PostPolicy;
use App\Policies\RolePolicy;
use App\Post;
use App\Role;
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
        'App\Model' => 'App\Policies\ModelPolicy',

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // Gate::define('list_role', function ($user) {
        //     // return $user->isAdmin;
        //     // dd($user);
        //     return $user->checkPermissionAccess('list_role');
        // });
        //role
        Gate::define('list_role', 'App\Policies\RolePolicy@view');
        Gate::define('add_role', 'App\Policies\RolePolicy@create');
        Gate::define('delete_role', 'App\Policies\RolePolicy@delete');
        Gate::define('update_role', 'App\Policies\RolePolicy@update');
        //post
        Gate::define('list_post', 'App\Policies\PostPolicy@view');
        Gate::define('add_post', 'App\Policies\PostPolicy@create');
        Gate::define('delete_post', 'App\Policies\PostPolicy@delete');
        Gate::define('update_post', 'App\Policies\PostPolicy@update');
        //author
        Gate::define('list_author', 'App\Policies\AuthorPolicy@view');
        Gate::define('add_author', 'App\Policies\AuthorPolicy@create');
        Gate::define('delete_author', 'App\Policies\AuthorPolicy@delete');
        Gate::define('update_author', 'App\Policies\AuthorPolicy@update');

        //post
        // Gate::define('post-list', 'App\Policies\PostPolicy@view');
        // Gate::define('post-add', 'App\Policies\PostPolicy@create');



        // //Order
        // Gate::define('order-list', 'App\Policies\OrderPolicy@view');

        // //role
        // Gate::define('role-add', 'App\Policies\RolePolicy@create');
    }
}
