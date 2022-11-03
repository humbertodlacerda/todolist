<?php

namespace App\ToDoList\User\Services;

use App\ToDoList\Abstract\AbstractService;
use App\ToDoList\User\Repositories\UserRepository;

class UserService extends AbstractService
{
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
}
