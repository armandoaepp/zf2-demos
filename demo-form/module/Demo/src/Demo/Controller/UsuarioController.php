<?php


namespace Demo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


use Demo\Form\Formularios ;
use Demo\Model\Entity\Procesa;

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
        $objForm = new Formularios("Form");
        $objForm->elementText("nombre" ,"Nombre ", "","" ) ;
        $objForm->elementText("apellido" ,"Apellidos ", "","" ) ;
        $objForm->elementEmail("email" ,"Email ", "","" ) ;
        $objForm->elementPassword("pass" ,"Contraseña", "","" ) ;
        $objForm->elementButton("btnEnviar" , "Cancelar" , "btn btn-default" );
        $objForm->elementSubmit("btnSend" , "Guardar" , "btn btn-default" );

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

}
