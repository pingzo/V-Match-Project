<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
        'App\SchoolsProfile' => 'App\Policies\SchoolPolicy',
        //'App\Task' => 'App\Policies\TaskPolicy',
    ];
    
     /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //
    }
    
    /**
 * Destroy the given task.
 *
 * @param  Request  $request
 * @param  Task  $task
 * @return Response
 */
/**
 * The policy mappings for the application.
 *
 * @var array
 */

}
