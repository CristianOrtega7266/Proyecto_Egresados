<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPanelPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the user can access the admin panel.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function accessAdminPanel(User $user)
    {
        // Solo los roles 'admin' y 'docente' pueden acceder
        return $user->hasRole(['admin', 'docente']);
    }
}
