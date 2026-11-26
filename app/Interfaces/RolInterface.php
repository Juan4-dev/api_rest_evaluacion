<?php

namespace App\Interfaces;

interface RolInterface extends BaseInterface
{
    public function findByName(string $name);
}