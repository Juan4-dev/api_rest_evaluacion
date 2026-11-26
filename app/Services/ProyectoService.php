<?php 
namespace App\Services;
use App\Interfaces\ProyectoInterface;

class ProyectoService
{
    protected ProyectoInterface $proyectoRepository;
    public function __construct(ProyectoInterface $proyectoRepository)
    {
        $this->proyectoRepository = $proyectoRepository;
    }
    
    public function getAll(){
        return $this->$proyectoRepository->getAll();
    }

    public function getById(int $id){
        return $this->$proyectoRepository->getById($id);
    }

    public function create(array $data){
        return $this->$proyectoRepository->create($data);
    }

    public function update(int $id, array $data){
        return $this->$proyectoRepository->update($id, $data);
    }

    public function delete(int $id){
        return $this->$proyectoRepository->delete($id);
    }

    public function findByCode(int $codigo){
        return $this->$proyectoRepository->findByCode($codigo);
    }

    public function findByName(string $nombre){
        return $this->$proyectoRepository->findByName($nombre);
    }
    
}