<?php

namespace App\ToDoList\Task\Repositories;

use App\ToDoList\Task\Entities\TaskEntity;
use App\ToDoList\Abstract\AbstractRepository;

class TaskRepository extends AbstractRepository
{
    protected $model;
    
    public function __construct(TaskEntity $model)
    {
        $this->model = $model;
    }
}
