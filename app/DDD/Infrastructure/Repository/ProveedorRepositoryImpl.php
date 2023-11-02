<?php
//namespace de la clase en este caso repository
namespace App\DDD\Infrastructure\Repository;

//importe necesario de la entidad proveedor (dominio)
use App\DDD\Domain\Inventario\Entities\Proveedor;
//importe del repositorio de proveedor con el que se comunica con la base de datos (eloquent)
use App\DDD\Domain\Inventario\Ports\ProveedorRepository;
//importe de las normas de llenado y valores ORM (mapeado de la base de datos)
use App\DDD\Infrastructure\Repository\Eloquent\ProveedorORM;

//al ser la implementacion de los metodos del puerto de proveedor este usa la interfaz del repositorio
class ProveedorRepositoryImpl implements ProveedorRepository
{
    //funcion addproveedor de la interfaz implementada para guardar en la base de datos
    public function addProveedor(Proveedor $proveedor): bool
    {
        $model = new ProveedorORM([
            'idproveedor' => $proveedor->idProveedor,
            'nombre_proveedor' => $proveedor->nombreProveedor,
            'email' => $proveedor->email,
            'direccion' => $proveedor->direccion,
            'ruc' => $proveedor->ruc
        ]);

        return $model->save();
    } 
    
    //de aqui para abajo es lo mismo que arriba pero con diferentes funcionalidades del CRUD
    public function updateProveedor($id, Proveedor $proveedor): bool
    {
        $model = ProveedorORM::query()->findOrFail($id);
        //dd($model);
        return $model->update(
            [
                //'idproveedor' => $proveedor->idProveedor,
                'nombre_proveedor' => $proveedor->nombreProveedor,
                'email' => $proveedor->email,
                'direccion' => $proveedor->direccion,
                'ruc' => $proveedor->ruc
            ]);
    }

    public function deleteProveedor($id): bool
    {
        $affected = ProveedorORM::destroy($id);
        return $affected > 0;
    }

    public function getProveedor($id): Proveedor|null
    {
        $model = ProveedorORM::query()->findOrFail($id);
        return $this->makeProveedorFrom($model);
    }

    public function getProveedorAll(): array
    {
        $list = [];

        foreach (ProveedorORM::all() as $model)
        {
            $list[$model->idproveedor] = $this->makeProveedorFrom($model);
        }
        return $list;
    }

    protected function makeProveedorFrom(ProveedorORM $proveedor):Proveedor
    {
        return new Proveedor($proveedor->idproveedor, $proveedor->nombre_proveedor, $proveedor->email, $proveedor->direccion, $proveedor->ruc);
    }
}