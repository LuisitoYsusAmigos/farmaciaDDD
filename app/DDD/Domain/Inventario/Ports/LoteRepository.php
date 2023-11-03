<?php

//uso del espacio de los puertos
namespace App\DDD\Domain\Inventario\Ports;
use App\DDD\Domain\Inventario\Entities\Lote;
//importacion de las clases necesarias en este caso la entidad
//use App\Domain\Inventario\Entities\Lote;

interface LoteRepository
{
    public function addLote(Lote $Lote): bool;   

    public function updateLote($id, Lote $Lote): bool;

    public function deleteLote($id): bool;

    public function getLote($id): Lote|null;

    public function getLoteAll(): array;

}