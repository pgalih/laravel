<?php

namespace App\Policies;
use App\Task;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function update(User $user, Task $task)
    {
        return $user->role->name === 'Admin';
    }

    
}
