<?php

namespace App\ToDoList\Abstract;

use App\ToDoList\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function getModel(): Model
    {
        return $this->model;
    }

    public function getAll()
    {
        return $this->getModel()->all();

    }

    public function find(int $id)
    {
        return $this->getmodel()->find($id);
    }

    public function create($params): Model
    {
        return $this->getModel()->create($params);
    }

    public function update(int $id, array $data)
    {
        return $this->find($id)->update($data);

    }

    public function delete(int $id)
    {
        return $this->getmodel()->find($id)->delete();
    }
}
