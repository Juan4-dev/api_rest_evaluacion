<?php
namespace App\Repositories;

class UsuarioRepository extends BaseRepository implements UsuarioInterface
{
    public function __construct(Usuario $usuario){
        parent::__construct($usuario);
    }
    public function findByEmail(string $Email)
    {
        $registro = $this->model->where("email","LIKE","%", $email,"%")->get();  
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