<?php

namespace App\Repositories;

use App\Models\Channel;
use App\Models\User;

class ChannelRepository extends AbstractRepository
{
    protected $model = Channel::class;
    public function store($data)
    {
        return $this->model->create(array_merge($data->all()));
    }
}
