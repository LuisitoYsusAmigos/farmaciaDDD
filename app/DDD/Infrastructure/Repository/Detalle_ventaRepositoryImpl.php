<?php
//namespace de la clase en este caso repository
namespace App\DDD\Infrastructure\Repository;

//importe necesario de la entidad Detalle_venta (dominio)
use App\DDD\Domain\Inventario\Entities\Detalle_venta;
//importe del repositorio de Detalle_venta con el que se comunica con la base de datos (eloquent)
use App\DDD\Domain\Inventario\Ports\Detalle_ventaRepository;
//importe de las normas de llenado y valores ORM (mapeado de la base de datos)
use App\DDD\Infrastructure\Repository\Eloquent\Detalle_ventaORM;

//al ser la implementacion de los metodos del puerto de Detalle_venta este usa la interfaz del repositorio
class Detalle_ventaRepositoryImpl implements Detalle_ventaRepository
{
    //funcion addDetalle_venta de la interfaz implementada para guardar en la base de datos
    public function addDetalle_venta(Detalle_venta $Detalle_venta): bool
    {
        $model = new Detalle_ventaORM([

            'id_detalle_venta'=>$Detalle_venta-> id_detalle_venta,
            'subtotal'=>$Detalle_venta->subtotal,
            'utilidad'=>$Detalle_venta->utilidad,
            'cantidad'=>$Detalle_venta->cantidad,
            'precio'=> $Detalle_venta->precio,
            'id_producto'=> $Detalle_venta->id_producto,
            'id_venta'=> $Detalle_venta->id_venta,

            
            /*
            ['','','','','','',''];

            '' => $Detalle_venta->idDetalle_venta,
            'nombre_Detalle_venta' => $Detalle_venta->nombreDetalle_venta,
            'email' => $Detalle_venta->email,
            'direccion' => $Detalle_venta->direccion,
            'ruc' => $Detalle_venta->ruc
            */
        ]);
        //dd($model);
        //die();
        return $model->save();
    } 
    
    //de aqui para abajo es lo mismo que arriba pero con diferentes funcionalidades del CRUD
    public function updateDetalle_venta($id, Detalle_venta $Detalle_venta): bool
    {
        $model = Detalle_ventaORM::query()->findOrFail($id);
        //dd($model);
        return $model->update(
            [
                'id_detalle_venta'=>$Detalle_venta-> id_detalle_venta,
                'subtotal'=>$Detalle_venta->subtotal,
                'utilidad'=>$Detalle_venta->utilidad,
                'cantidad'=>$Detalle_venta->cantidad,
                'precio'=> $Detalle_venta->precio,
                'id_producto'=> $Detalle_venta->id_producto,
                'id_venta'=> $Detalle_venta->id_venta
                

                /*
                ['id_detalle_venta','subtotal','utilidad','cantidad','precio','id_producto','id_venta'];


                //'idDetalle_venta' => $Detalle_venta->idDetalle_venta,
                'nombre_Detalle_venta' => $Detalle_venta->nombreDetalle_venta,
                'email' => $Detalle_venta->email,
                'direccion' => $Detalle_venta->direccion,
                'ruc' => $Detalle_venta->ruc*/
            ]);
    }

    public function deleteDetalle_venta($id): bool
    {
        $affected = Detalle_ventaORM::destroy($id);
        return $affected > 0;
    }

    public function getDetalle_venta($id): Detalle_venta|null
    {
        $model = Detalle_ventaORM::query()->findOrFail($id);
        return $this->makeDetalle_ventaFrom($model);
    }

    public function getDetalle_ventaAll(): array
    {
        $list = [];

        foreach (Detalle_ventaORM::all() as $model)
        {
            $list[$model->id_detalle_venta] = $this->makeDetalle_ventaFrom($model);

        }
        return $list;
    }

    protected function makeDetalle_ventaFrom(Detalle_ventaORM $Detalle_venta):Detalle_venta
    {
        return new Detalle_venta(
                                    $Detalle_venta->id_detalle_venta,
                                    $Detalle_venta->subtotal,
                                    $Detalle_venta->utilidad,
                                    $Detalle_venta->cantidad,
                                    $Detalle_venta->precio,
                                    $Detalle_venta->id_producto,
                                    $Detalle_venta->id_venta
                                );
    }
}