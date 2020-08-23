<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository extends AbstractRepository
{
    protected $model = Role::class;

    public function store($data)
    {
        return $this->model->create($data->all());
    }

    public function update($data, $id)
    {
        $role = $this->model->find($id);

        $role->permissions()->sync($data->permissions);

        return $role->update($data->all());
    }
}
