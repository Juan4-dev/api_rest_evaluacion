<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\RolInterface;
use App\Repositories\RolRepository;

use App\Interfaces\UsuarioInterface;
use App\Repositories\UsuarioRepository;

use App\Interfaces\ProyectoInterface;
use App\Repositories\ProyectoRepository;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(RolInterface::class, RolRepository::class);
        $this->app->bind(UsuarioInterface::class, UsuarioRepository::class);
        $this->app->bind(ProyectoInterface::class, ProyectoRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
