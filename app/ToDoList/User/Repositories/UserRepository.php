<?php

namespace App\ToDoList\User\Repositories;

use App\ToDoList\User\Entities\UserEntity;
use App\ToDoList\Abstract\AbstractRepository;

class UserRepository extends AbstractRepository
{
    protected $model;

    public function __construct(UserEntity $model)
    {
        $this->model = $model;
    }
}
