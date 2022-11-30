<?php

namespace App\Policies;

use App\Enums\Role;
use App\Models\User;
use App\Models\Image;
use Illuminate\Auth\Access\HandlesAuthorization;

class ImagePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

   
    public function view(User $user, Image $image)
    {
        return true;
        
    }

    
    public function create(User $user)
    {
        return true;
        
    }

   
    public function update(User $user, Image $image)
    {
        return $user->id===$image->user_id || $image->role===Role::Aditor;
    }

   
    public function delete(User $user, Image $image)
    {
        return $user->id===$image->user_id || $image->role===Role::Aditor;

    }

   
    public function restore(User $user, Image $image)
    {
        //
    }

    public function forceDelete(User $user, Image $image)
    {
        return $user->id===$image->user_id || $image->role===Role::Aditor;
        
    }
}