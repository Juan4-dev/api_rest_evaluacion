<?php
namespace App\Repositories;

class ProyectoRepository extends BaseRepository implements ProyectoInterface
{
    public function __construct(Usuario $usuario){
        parent::__construct($usuario);
    }
    public function findByCode(int $code)
    {
        $registro = $this->model->where("code","LIKE","%", $code,"%")->get();  
        if(isEmpty($registro))
        {
            return null;
        }
        return $registro;
    }
    public function findByName(string $name)
    {
        $registro = $this->model->where("name","LIKE", "%",$name,"%")->get();  
        if(isEmpty($registro))
        {
            return null;
        }
        return $registro;    
    }
}


