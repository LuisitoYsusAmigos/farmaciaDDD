<?php

namespace App\DDD\Infrastructure\Repository;

use App\DDD\Domain\Inventario\Entities\Laboratorio;
use App\DDD\Domain\Inventario\Ports\LaboratorioRepository;
use App\DDD\Infrastructure\Repository\Eloquent\LaboratorioORM;

class LaboratorioRepositoryImpl implements LaboratorioRepository
{
    /**
     * {@inheritdoc}
     */
    public function addLaboratorio(Laboratorio $laboratorio): bool
    {
        // aquí se usa el modelo de Eloquent para insertar los datos
        $model = new LaboratorioORM([
            'id' => $laboratorio->idLaboratorio,
            'nombre_laboratorio' => $laboratorio->nombreLaboratorio
        ]);
        return $model->save();
    }

    /**
     * {@inheritdoc}
     */
    public function updateLaboratorio($id, Laboratorio $laboratorio): bool
    {
        $model = LaboratorioORM::query()->findOrFail($id);
        return $model->update([
            'id' => $laboratorio->idLaboratorio,
            'nombre_laboratorio' => $laboratorio->nombreLaboratorio
        ]);
    }

    /**
     * {@inheritdoc}
     */

    public function deleteLaboratorio($id): bool
    {
        $affected = LaboratorioORM::destroy($id);
        return $affected > 0;
    }

    /**
     * {@inheritdoc}
     */

    public function getLaboratorio($id): Laboratorio|null
    {
        $model = LaboratorioORM::query()->findOrFail($id);
        return $this->makeLaboratorioFrom($model);
    }

    /**
     * {@inheritdoc}
     */

    public function getLaboratorioAll(): array
    {
        $list = [];

        // obtiene los productos desde Eloquent (ProductoORM), los converte en producto 
        // y los adiciona a un arreglo cuya key es el id del producto
        foreach (LaboratorioORM::all() as $model) {
            $list[$model->id] = $this->makeLaboratorioFrom($model);
        }

        return $list;
    }

    /**
     * Mapea el modelo de eloquent en la clase del dominio
     */
    protected function makeLaboratorioFrom(LaboratorioORM $model): Laboratorio
    {
        return new Laboratorio($model->id, $model->nombre_laboratorio);
    }
}
