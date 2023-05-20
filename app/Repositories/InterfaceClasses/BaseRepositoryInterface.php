<?php

namespace App\Repositories\InterfaceClasses;

interface BaseRepositoryInterface
{
    /**
     * @param array|string[] $columns
     * @param array $relations
     * @param int $count
     * @return CursorPaginator
     */

    public function all(array $columns=['*'], array $relation =[]);
}
