<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Task;
use App\Policies\TaskPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Task::class => TaskPolicy::class,
    ];

    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
    }
}