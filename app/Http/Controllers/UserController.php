<?php

namespace App\Http\Controllers;

use App\ToDoList\User\Services\UserService;

class UserController extends AbstractController
{
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function taskOrUser()
    {
        $user = $this->auth('sanctum')->user();
        $task = $user->task();

        return $task;
    }
}
