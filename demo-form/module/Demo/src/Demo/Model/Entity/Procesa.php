<?php

/**
 * @author C�sar Cancino
 * @copyright 2013
 */
namespace Demo\Model\Entity;
class Procesa
{
    private $nombre;
    private $correo;

    public function __construct($datos=array())
    {
        $this->nombre=$datos["nombre"];
        $this->correo=$datos["email"];
    }
    public function getData()
    {
        $array=array($this->nombre,$this->correo);
        return $array;
    }
}
?>