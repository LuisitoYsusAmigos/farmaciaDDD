<?php

namespace App\DDD\Infrastructure\Repository;

use App\DDD\Domain\Inventario\Entities\Categoria;
use App\DDD\Domain\Inventario\Ports\CategoriaRepository;
use App\DDD\Infrastructure\Repository\Eloquent\CategoriaORM;

class CategoriaRepositoryImpl implements CategoriaRepository
{
    /**
     * {@inheritdoc}
     */
    public function addCategoria(Categoria $categoria): bool
    {
        // aquí se usa el modelo de Eloquent para insertar los datos
        $model = new CategoriaORM([
            'id' => $categoria->idCategoria,
            'nombre' => $categoria->nombreCategoria
        ]);
        //dd($model);
        return $model->save();
    }

    /**
     * {@inheritdoc}
     */
    public function updateCategoria($id, Categoria $categoria): bool
    {
        $model = CategoriaORM::query()->findOrFail($id);
        //dd($model);
        return $model->update(
        [
            'id' => $categoria->idCategoria,
            'nombre' => $categoria->nombreCategoria
        ]);
    }

    /**
     * {@inheritdoc}
     */

    public function deleteCategoria($id): bool
    {
        $affected = CategoriaORM::destroy($id);
        return $affected > 0;
    }

    /**
     * {@inheritdoc}
     */

    public function getCategoria($id): Categoria|null
    {
        $model = CategoriaORM::query()->findOrFail($id);
        return $this->makeCategoriaFrom($model);
    }

    /**
     * {@inheritdoc}
     */

    public function getCategoriaAll(): array
    {
        $list = [];

        // obtiene los productos desde Eloquent (ProductoORM), los converte en producto 
        // y los adiciona a un arreglo cuya key es el id del producto
        foreach (CategoriaORM::all() as $model) {
            $list[$model->id] = $this->makeCategoriaFrom($model);
        }

        return $list;
    }

    /**
     * Mapea el modelo de eloquent en la clase del dominio
     */
    protected function makeCategoriaFrom(CategoriaORM $model): Categoria
    {
        return new Categoria($model->id, $model->nombre);
    }
}
