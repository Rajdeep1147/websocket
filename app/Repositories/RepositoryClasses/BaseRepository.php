<?php

namespace App\Repositories\RepositoryClasses;

use App\Repositories\InterfaceClasses\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Auth;
use App\Models\User;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model =$model;
    }


    public function all(array $columns=['*'], array $relation =[])
    {
        return $this->model->with($relation)->get($columns);
    }
}
