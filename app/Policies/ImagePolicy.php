<?php

namespace App\Policies;

use App\Enums\Role;
use App\Models\User;
use App\Models\Image;
use Illuminate\Auth\Access\HandlesAuthorization;

class ImagePolicy
{
    use HandlesAuthorization;

    public function edit(User $user, Image $image)
    {
        return $user->id===$image->user_id || $user->role===Role::Aditor;
    }
    public function Update(User $user, Image $image)
    {
        return $user->id===$image->user_id || $user->role===Role::Aditor;
    }
    public function delete(User $user, Image $image)
    {
        return $user->id===$image->user_id;
    }

}