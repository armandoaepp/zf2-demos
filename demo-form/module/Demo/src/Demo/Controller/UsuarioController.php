<?php


namespace Demo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
# para conexion a DB
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;

use Demo\Form\Formularios ;
use Demo\Model\Entity\Procesa;
use Demo\Model\Entity\ClsUsuario;


class UsuarioController extends AbstractActionController
{
    public function indexAction()
    {
        $objForm = new Formularios("Form");
        return array();
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /module-specific-root/skeleton/foo
        return array();
    }

    public function nuevoAction()
    {
        $objusaurio =  new ClsUsuario();
        $sexo = $objusaurio->geSexo() ;

        $objForm = new Formularios("Form");
        $objForm->elementText("nombre" ,"Nombre ", "","" ) ;
        $objForm->elementText("apellidos" ,"Apellidos ", "","" ) ;
        $objForm->elementEmail("email" ,"Email ", "","" ) ;
        $objForm->elementPassword("pass" ,"Contraseña", "","" ) ;
        $objForm->elementButton("btnEnviar" , "Cancelar" , "btn btn-default" );
        $objForm->elementSubmit("btnSend" , "Guardar" , "btn btn-default" );
        $objForm->elementfile("img_" , "Foto" , "" );
        $objForm->elementHidden("oculto" , "12123" );


         // $sexo = array('1' => 'Masculino', '2' => 'Femenino', )  ;
        $objForm->elementMultiRadio("sexo" ,"Sexo  ",$sexo , 'radio'  ) ;

        $url = $this->getRequest()->getBaseUrl() ;
        $data = array(
            'tile' => "Creacion de Fomularios con Zend",
            'url'  => $url ,
            'form' => $objForm ,
        ) ;
        return  new ViewModel($data);
    }

    public function recibeAction()
    {
        $data = $this->request->getPost();
        $procesa = new Procesa($data);
        $datos=$procesa->getData();
        return new ViewModel(array('datos'=>$datos));
    }

    public function resultAction()
    {
        $this->dbAdapter=$this->getServiceLocator()->get('Zend\Db\Adapter');
        //var_dump($this->dbAdapter);
        $result=$this->dbAdapter->query("select * from usuario order by 1 desc",Adapter::QUERY_MODE_EXECUTE);
        $datos=$result->toArray();
        return new ViewModel(array("titulo"=>"Conectarse a MySQL usando resultSet","datos"=>$datos));
    }

    public function sqlAction()
    {
        $this->dbAdapter=$this->getServiceLocator()->get('Zend\Db\Adapter');
        $sql = new Sql($this->dbAdapter);
        $select = $sql->select()
                      ->from('usuario')
                      // ->where(array('id'=>'9'))
                      ->order('id desc');
        $selectString = $sql->getSqlStringForSqlObject($select);
        //echo $selectString;
        $result= $this->dbAdapter->query($selectString, Adapter::QUERY_MODE_EXECUTE);
        $datos=$result->toArray();
        return new ViewModel(array("titulo"=>"Conectarse a MySQL usando sql","datos"=>$datos));
    }

}
