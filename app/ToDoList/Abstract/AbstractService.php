<?php

namespace App\ToDoList\Abstract;

use App\ToDoList\Interfaces\ServiceInterface;

abstract class AbstractService implements ServiceInterface
{
    public function getAll()
    {
        return $this->getRepository()->getAll();
    }

    public function find(int $id)
    {
        return $this->getRepository()->find($id);
    }

    public function save(array $params)
    {
    }

    public function update($id, array $data)
    {
        return $this->getRepository()->update($id, $data);
    }

    public function delete(int $id)
    {
        $this->getRepository()->delete($id);
    }

    public function getRepository()
    {
        return $this->repository;
    }

    public function create(array $data)
    {
        return $this->getRepository()->create($data);
    }
}
