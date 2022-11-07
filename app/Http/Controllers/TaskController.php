<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDoList\Task\Services\TaskService;

class TaskController extends AbstractController
{
    public function __construct(TaskService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        $this->service->create([
            'content' => $request->name,
            'user_id' => auth('sanctum')->user()->id
        ]);
        return response()->json($request);
    }
}
