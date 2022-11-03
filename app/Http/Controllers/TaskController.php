<?php

namespace App\Http\Controllers;

use App\ToDoList\Task\Services\TaskService;

class TaskController extends AbstractController
{
    public function __construct(TaskService $service)
    {
        $this->service = $service;
    }
}
