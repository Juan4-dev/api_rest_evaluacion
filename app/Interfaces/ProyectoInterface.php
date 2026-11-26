<?php

namespace App\Interfaces;

interface ProyectoInterface extends BaseInterface
{
    public function findByCode(int $code);
    public function findByName(string $name);
    
}