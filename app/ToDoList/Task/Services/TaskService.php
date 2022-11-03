<?php

namespace App\ToDoList\Task\Services;

use App\ToDoList\Abstract\AbstractService;
use App\ToDoList\Task\Repositories\TaskRepository;

class TaskService extends AbstractService
{
    public function __construct(TaskRepository $repository)
    {
        $this->repository = $repository;
    }
}
