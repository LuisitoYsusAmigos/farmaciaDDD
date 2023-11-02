<?php
//namespace de los casos de uso
namespace App\DDD\Application\Laboratorio\UseCases;

//importes necesarios para el funcionamiento la entidad proveedor del dominio
use App\DDD\Domain\Inventario\Entities\Laboratorio;
//importe necesario del repositorio de proveedor con el que interactua con la base de datos
//nota este es el equivalente de Eloquent
use App\DDD\Domain\Inventario\Ports\LaboratorioRepository;

class CreateLaboratorioUseCase
{
    //variable repository usada para manipular los metodos del repositorio o eloquent
    protected $repository;

    //function constructora que recibe el repositorio de proveedor 
    public function __construct(LaboratorioRepository $repository)
    {
        $this->repository = $repository;
    }

    //funcion propia de la clase proveedor
    public function createLaboratorio(array $attributes = []): Laboratorio
    {
        //creacion de un objeto de la entidad de dominio
        $laboratorio = new Laboratorio();
        $laboratorio->idLaboratorio = $attributes['id_laboratorio'];
        $laboratorio->nombreLaboratorio = $attributes['nombre_laboratorio'];

        //Regresa un Proveedor con datos vacios
        return $laboratorio;
    }
}