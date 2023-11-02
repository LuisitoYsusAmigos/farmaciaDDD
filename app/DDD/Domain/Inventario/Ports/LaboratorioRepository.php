<?php

namespace App\DDD\Domain\Inventario\Ports;

use App\DDD\Domain\Inventario\Entities\Laboratorio;

interface LaboratorioRepository
{
    public function addLaboratorio(Laboratorio $laboratorio): bool;

    public function updateLaboratorio($id, Laboratorio $laboratorio): bool;

    public function deleteLaboratorio($id): bool;

    public function getLaboratorio($id): Laboratorio|null;

    public function getLaboratorioAll(): array;

}