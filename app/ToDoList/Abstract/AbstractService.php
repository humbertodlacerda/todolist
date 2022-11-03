<?php

namespace App\ToDoList\Abstract;

use App\ToDoList\Interfaces\ServiceInterface;

abstract class AbstractService implements ServiceInterface
{
    public function getAll()
    {
        $response = $this->getRepository()->getAll();
        return $response;
    }

    public function find(int $id)
    {
        $response = $this->getRepository()->find($id);
        return $response;
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
        $entity = $this->getRepository()->create($data);
        return $entity;
    }
}
