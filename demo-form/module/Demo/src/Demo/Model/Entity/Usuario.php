<?php

/**
 * @author César Cancino
 * @copyright 2013
 */
namespace Demo\Model\Entity;

use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\TableGateway;

class Usuario extends TableGateway
{
     public function __construct(Adapter $adapter = null, $databaseSchema = null, ResultSet $selectResultPrototype = null)
    {
        return parent::__construct('usuario', $adapter, $databaseSchema,$selectResultPrototype);
    }

    public function getUsuarios()
    {
        $datos = $this->select();
        return $datos->toArray();
    }

    public function getUsuarioPorId($id)
    {
        $id  = (int) $id;
        $rowset = $this->select(array('id' => $id));
        $row = $rowset->current();

        if (!$row) {
            throw new \Exception("No hay registros asociados al valor $id");
        }

        return $row;
    }

    public function addUsuario($data=array())
    {
       $this->insert($data);
    }

    public function updateUsuario($id, $data=array())
    {
        $this->update($data, array('id' => $id));
    }

    public function deleteUsuario($id)
    {
        $this->delete(array('id' => $id));
    }

}

?>