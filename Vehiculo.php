<?php

/**
 * Created by PhpStorm.
 * User: pidal
 * Date: 03/12/15
 * Time: 15:50
 */

abstract class Vehiculo
{

    private $color;
    private $marca;

    /**
     * Vehiculo constructor.
     * @param $color
     * @param $marca
     */
    public function __construct($color, $marca)
    {
        $this->color = $color;
        $this->marca = $marca;
    }


    private function avanzar() {
        return "Moviendome...";
    }

    public function mover()
    {
        return $this->avanzar();
    }

    abstract function repostar();

}


class Coche extends Vehiculo
{

    function repostar()
    {
        // TODO: Implement repostar() method.
    }
}

class Moto extends Vehiculo
{

    function repostar()
    {
        // TODO: Implement repostar() method.
    }
}

class Camion extends Vehiculo implements VehiculoCarga, VehiculoTurismo
{

    function repostar()
    {
        // TODO: Implement repostar() method.
    }

    public function cargar()
    {
        // TODO: Implement cargar() method.
    }

    public function descargar()
    {
        // TODO: Implement descargar() method.
    }

    public function mover_asiento()
    {
        // TODO: Implement mover_asiento() method.
    }
}

$vehiculos = [];



$camiones = [];

$camiones[1].cargar();
$camiones[1].descargar();


$faker = new Faker();
$faker->








class Barco extends Vehiculo
{

    function repostar()
    {
        // TODO: Implement repostar() method.
    }
}

$coche = new Coche("ro" . "jo", "opel");
$coche1 = new Coche("ro" . "jo", "opel");
$coche2 = new Coche("ro" . "jo", "opel");
$coche3 = new Coche("ro" . "jo", "opel");


echo $coche->mover();
