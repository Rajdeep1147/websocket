<?php

namespace App\Repositories\RepositoryClasses;

use App\Models\User;
use App\Repositories\InterfaceClasses\UserRepositoryInterface ;
use App\Repositories\RepositoryClasses;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model =$model;
    }
}
