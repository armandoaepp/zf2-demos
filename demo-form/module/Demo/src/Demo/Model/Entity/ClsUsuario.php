<?php

/**
 * @author César Cancino
 * @copyright 2013
 */
namespace Demo\Model\Entity;
class ClsUsuario
{
    private $nombre;
    private $apellidos;
    private $email;
    private $password;

    /*public function __construct($datos=array())
    {
        $this->nombre    = $datos["nombre"];
        $this->apellidos = $datos["apellidos"];
        $this->email     = $datos["email"];
        $this->password  = $datos["password"];
    }*/
    public function getData()
    {
        $array=array($this->nombre,$this->email);
        return $array;
    }
    public function geSexo()
    {
        $sexo = array('1' => 'Masculino', '2' => 'Femenino', )  ;
        return $sexo;
    }
}

?>