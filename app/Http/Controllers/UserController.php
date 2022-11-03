<?php

namespace App\Http\Controllers;

use App\ToDoList\User\Services\UserService;

class UserController extends AbstractController
{
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }
}
