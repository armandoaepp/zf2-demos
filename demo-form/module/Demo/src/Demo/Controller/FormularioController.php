<?php


namespace Demo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


use Demo\Form\Formularios ;

class FormularioController extends AbstractActionController
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

    public function formularioAction()
    {
        $objForm = new Formularios("Form");
        $objForm->inputText("Apellido" ,"Ingrese sus Apellidos ", "form-control" ) ;
        $objForm->inputEmail("emailUser" ,"Ingrese Email ", "form-control" ) ;
        $objForm->textArea("mensaje" ,"Mensaje ", "form-control" ) ;
        $objForm->elementCaptcha("Captcha" ,"Ingrese datos de la Imagen ", "form-control" ) ;


        $data = array(
                    'tile' => "Creacion de Fomularios con Zend",
                    'form' => $objForm ,
                ) ;
        return  new ViewModel($data);
    }

    public function recibeAction()
    {
        $data = $this->request->getPost();
        $procesa=new Procesa($data);
        $datos=$procesa->getData();
        return new ViewModel(array('datos'=>$datos));
    }

}
