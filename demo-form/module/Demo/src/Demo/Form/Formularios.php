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

		$this->add(array(
            'name' => 'Nombre',
            'options' => array(
                'label' => 'Nombre Completo',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control'
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

                'class' => 'form-control'
            ),
                ));

        $this->add($email);

      $this->add(array(
            'name' => 'send',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Enviar',
                'title' => 'Enviar',
                'class' => 'btn btn-default'
            ),
        ));

      /*$input_text = new Element('Apellido');
      $input_text->setLabel('Ingrese Apellidos');
      $input_text->setAttributes(array(
          'type'  => 'text'
      ));
      $this->add($input_text);*/



		// $this->add(array(
  //           'type' => 'Zend\Form\Element\Textarea',
  //           'name' => '',
  //           'options' => array(
  //               'label' => 'Module',
  //           ),
  //       ));




	}


  public function inputText($name , $nameLabel , $classCss = "form-control" )
  {
    $this->add(array(
              'name' => $name,
              'options' => array(
                'label' => $nameLabel,
              ),
             'attributes' => array(
                'type' => 'text',
                'class' => $classCss
              ),
            ));
  }

  public function inputEmail($name , $nameLabel , $classCss = "form-control" )
  {
      $this->add(array(
            'type' => 'Zend\Form\Element\Email',
            'name' => $name,
            'options' => array(
                'label' =>  $nameLabel,
            ),
            'attributes' => array(
                'class' => $classCss ,
            ),
        ));
  }

  public function textArea($name , $nameLabel , $classCss = "form-control" )
  {
      $this->add(array(
            'type' => 'Zend\Form\Element\Textarea',
            'name' => $name,
            'options' => array(
                'label' =>  $nameLabel,
            ),
            'attributes' => array(
                'class' => $classCss ,
            ),
        ));
  }

  public function elementCaptcha($name , $nameLabel , $classCss = "form-control" )
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




}