<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Image;
use Illuminate\Auth\Access\HandlesAuthorization;

class ImagePolicy
{
    use HandlesAuthorization;

    public function edit(User $user, Image $image)
    {
        return $user->id===$image->user_id;
    }
    public function delete(User $user, Image $image)
    {
        return $user->id===$image->user_id;
    }

}