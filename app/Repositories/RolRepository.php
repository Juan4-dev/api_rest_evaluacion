<?php

namespace App\Repositories;
use App\Models\Rol;

class RolRepository extends BaseRepository implements RolInterface
{
    public function __construct(Rol $rol)
    {
        parent::__construct($rol);
    }


    public function findByName(string $name)
    {
        return $this->model->where("name", "LIKE", "%". $name. "%")->get();
        
    }

    
}