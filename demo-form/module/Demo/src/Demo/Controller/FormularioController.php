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
        $objForm->elementText("Nombre" ,"Ingrese su Nombre ", "","" ) ;
        $objForm->elementText("Apellido" ,"Ingrese sus Apellidos ", "","" ) ;
        $objForm->elementEmail("emailUser" ,"Ingrese Email ", "","" ) ;
        $objForm->textArea("mensaje" ,"Mensaje ", "","" ) ;
        $objForm->elementCaptcha("Captcha" ,"Ingrese datos de la Imagen ", "","" ) ;
        $objForm->elementCheckbox("chk_politica" ,"Acepto las politicas  ", "Nuevo", "","" ) ;
        $chk_mul = array('0' => 'Apple', '1' => 'Orange', '2' => 'Lemon', )  ;
        $objForm->elementMultiCheckbox("chk_multi" ,"Check multiple  ",$chk_mul ) ;
        $objForm->elementMultiRadio("rd_multi" ,"Check multiple  ",$chk_mul ) ;
        $objForm->elementDate("fechaNac" ,"Fecha de Nacimiento",'' ) ;
        $objForm->elementFile("img_" , "suba su imagen" ) ;
        $objForm->elementButton("btnEnviar" , "Registrar Datos" , "btn btn-default" );

        $paises = array(
             '0' => 'French',
             '1' => 'English',
             '2' => 'Japanese',
             '3' => 'Chinese',
        ) ;
        $objForm->elementSelect("Paises_" ,"Paises",$paises) ;



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
