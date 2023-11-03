<?php
//namespace de la clase en este caso repository
namespace App\DDD\Infrastructure\Repository;

//importe necesario de la entidad Lote (dominio)
use App\DDD\Domain\Inventario\Entities\Lote;
//importe del repositorio de Lote con el que se comunica con la base de datos (eloquent)
use App\DDD\Domain\Inventario\Ports\LoteRepository;
//importe de las normas de llenado y valores ORM (mapeado de la base de datos)
use App\DDD\Infrastructure\Repository\Eloquent\LoteORM;

//al ser la implementacion de los metodos del puerto de Lote este usa la interfaz del repositorio
class LoteRepositoryImpl implements LoteRepository
{
    //funcion addLote de la interfaz implementada para guardar en la base de datos
    public function addLote(Lote $Lote): bool
    {
        $model = new LoteORM([
            'id_Lote' => $Lote->id_Lote,
            'nombre_Lote' => $Lote->nombreLote,
            'email' => $Lote->email,
            'direccion' => $Lote->direccion,
            'ruc' => $Lote->ruc
        ]);

        return $model->save();
    } 
    
    //de aqui para abajo es lo mismo que arriba pero con diferentes funcionalidades del CRUD
    public function updateLote($id, Lote $Lote): bool
    {
        $model = LoteORM::query()->findOrFail($id);
        //dd($model);
        return $model->update(
            [
                //'idLote' => $Lote->idLote,
                'nombre_Lote' => $Lote->nombreLote,
                'email' => $Lote->email,
                'direccion' => $Lote->direccion,
                'ruc' => $Lote->ruc
            ]);
    }

    public function deleteLote($id): bool
    {
        $affected = LoteORM::destroy($id);
        return $affected > 0;
    }

    public function getLote($id): Lote|null
    {
        $model = LoteORM::query()->findOrFail($id);
        return $this->makeLoteFrom($model);
    }

    public function getLoteAll(): array
    {
        $list = [];

        foreach (LoteORM::all() as $model)
        {
            $list[$model->idLote] = $this->makeLoteFrom($model);
        }
        return $list;
    }

    protected function makeLoteFrom(LoteORM $Lote):Lote
    {
        return new Lote($Lote->idLote, $Lote->nombre_Lote, $Lote->email, $Lote->direccion, $Lote->ruc);
    }
}