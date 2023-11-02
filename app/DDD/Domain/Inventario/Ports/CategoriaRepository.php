<?php

namespace App\DDD\Domain\Inventario\Ports;

use App\DDD\Domain\Inventario\Entities\Categoria;

interface CategoriaRepository
{
    public function addCategoria(Categoria $categoria): bool;

    public function updateCategoria($id, Categoria $categoria): bool;

    public function deleteCategoria($id): bool;

   
    public function getCategoria($id): Categoria|null;

   
    public function getCategoriaAll(): array;

}