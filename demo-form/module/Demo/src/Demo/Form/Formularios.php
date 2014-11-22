<?php

namespace Demo\Form ;

use Zend\Captcha\AdapterInterface as CaptchaAdapter;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Captcha;
use Zend\Form\Factory;


class Formularios extends Form
{

	function __construct($name = null )
	{
		parent::__construct($name);

		/*$this->add(array(
            'name' => 'Nombre',
            'options' => array(
                'label' => 'Nombre Completo',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => ''
            ),
        ));

     $factory = new Factory();

        $email = $factory->createElement(array(
            'type' => 'Zend\Form\Element\Email',
            'name' => 'email',
            'options' => array(
                'label' => 'Email: ',
            ),
            'attributes' => array(

                'class' => ''
            ),
                ));

        $this->add($email);
*/
      $this->add(array(
            'name' => 'send',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Enviar',
                'title' => 'Enviar',
                'class' => 'btn btn-default'
            ),
        ));

	}


  public function inputText($name , $nameLabel , $classCss = "" )
  {
    $this->add(array(
              'name' => $name,
              'options' => array(
                'label' => $nameLabel,
              ),
             'attributes' => array(
                'type'  => 'text',
                'class' => $classCss,
                'id'    => $name,
              ),
            ));
  }

  public function inputEmail($name , $nameLabel , $classCss = "" )
  {
      $this->add(array(
            'type' => 'Zend\Form\Element\Email',
            'name' => $name,
            'options' => array(
                'label' =>  $nameLabel,
            ),
            'attributes' => array(
                'class' => $classCss ,
                'id'    => $name,
            ),
        ));
  }

  public function inputCheckbox($name , $nameLabel , $value = '' , $classCss = "" )
  {
      $this->add(array(
                 'type' => 'Zend\Form\Element\Checkbox',
                 'name' => $name,
                 'options' => array(
                         'label' => $nameLabel,
                         'checked_value' =>  $value,
                 )
         ));
  }

  public function textArea($name , $nameLabel , $classCss = "" )
  {
      $this->add(array(
            'type' => 'Zend\Form\Element\Textarea',
            'name' => $name,
            'options' => array(
                'label' =>  $nameLabel,
            ),
            'attributes' => array(
                'class' => $classCss ,
                'id' => $name ,
            ),
        ));
  }

  public function elementCaptcha($name , $nameLabel , $classCss = "" )
  {
      $this->add(
               array(
                  'type' => 'Zend\Form\Element\Captcha',
                  'name' => $name,
                  'options' => array(
                      'label' => 'Please verify you are human.',
                      'captcha' => array(
                          'class' => 'Dumb',
                      ),
                  ),
          ));
  }

  public function inputMultiCheckbox($name , $nameLabel , $options_values  = array() )
  {
       $this->add(array(
               'type' => 'Zend\Form\Element\MultiCheckbox',
               'name' => $name ,
               'options' => array(
                       'label' =>  $nameLabel,
                       'value_options' => $options_values ,
               )
       ));
  }

  public function inputMultiRadio($name , $nameLabel , $options_values  = array() )
  {
       $this->add(array(
               'type' => 'Zend\Form\Element\Radio',
               'name' => $name ,
               'options' => array(
                       'label' =>  $nameLabel,
                       'value_options' => $options_values ,
               )
       ));
  }

  public function inputDate($name , $nameLabel , $classCss = "" )
  {
        $this->add(array(
            'type' => 'Zend\Form\Element\Date',
            'name' => $name,
            'options' => array(
                'label' =>  $nameLabel,
            ),
            'attributes' => array(
                'class' => $classCss ,
                'id'    => $name,
            ),
        ));
  }


/* options_values =  array(
       '0' => 'Apple',
       '1' => 'Orange',
       '2' => 'Lemon',
    )*/


  public function selectOption($name , $nameLabel , $options_values  = array()  , $classCss = "", $optionEmpty = '[Seleccionar Opcion ]' )
  {
       $this->add(array(
               'type' => 'Zend\Form\Element\Select',
               'name' => $name ,
               'options' => array(
                       'label' =>  $nameLabel,
                       'empty_option' => $optionEmpty,
                       'value_options' => $options_values ,
               ),
               'attributes' => array(
                'class' => $classCss ,
                'id' => $name ,
            ),
       ));
  }


  public function inputFile($name , $nameLabel )
  {
      // File Input
      $file = new Element\File($name);
      $file->setLabel($nameLabel)
           ->setAttribute('id', $name);
      $this->add($file);
  }

  public function inputButton($name , $nameLabel , $classCss = "" )
  {
       $this->add(array(
               'name' => $name ,
               'attributes' => array(
                  'class' => $classCss ,
                  'id'    => $name ,
                  'type'  => 'submit',
                  'value' => $nameLabel,
                  'title' => $nameLabel,
                  'class' => $classCss , //'btn btn-default'
            ),
       ));
  }




}