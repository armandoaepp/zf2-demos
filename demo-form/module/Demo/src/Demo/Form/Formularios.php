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

	}

  # input type hidden
  public function elementHidden($name , $value = ""  )
  {
    $this->add(array(
              'name' => $name,
             'attributes' => array(
                'id'    => $name,
                'value'    => $value,
              ),
            ));
  }
# input type text
  public function elementText($name , $nameLabel , $value = "" , $classCss = "" )
  {
    $this->add(array(
              'name' => $name,
              'options' => array(
                'label' => $nameLabel,
              ),
             'attributes' => array(
                'type'  => 'text',
                'value' => $value ,
                'class' => $classCss,
                'id'    => $name,
              ),
            ));
  }

  # input type email
  public function elementEmail($name , $nameLabel , $value= "" , $classCss = "" )
  {
      $this->add(array(
            'type' => 'Zend\Form\Element\Email',
            'name' => $name,
            'options' => array(
                'label' =>  $nameLabel,
            ),
            'attributes' => array(
                'value' => $value ,
                'class' => $classCss ,
                'id'    => $name,
            ),
        ));
  }

  # input type password
  public function elementPassword($name , $nameLabel , $value= "" , $classCss = "" )
  {
        $this->add(array(
              'type' => 'password',
              'name' => $name,
              'options' => array(
                  'label' =>  $nameLabel,
              ),
              'attributes' => array(
                  'value' => $value ,
                  'class' => $classCss ,
                  'id'    => $name,
              ),
          )
        );
  }

  # input type captcha
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
   # input type date
  public function elementDate($name , $nameLabel,$value = "" , $classCss = "" )
  {
        $this->add(array(
            'type' => 'Zend\Form\Element\Date',
            'name' => $name,
            'options' => array(
                'label' =>  $nameLabel,
            ),
            'attributes' => array(
                'value' => $value ,
                'class' => $classCss ,
                'id'    => $name,
            ),
        ));
  }

  # input type  Checkbox para un unico elemento
  public function elementCheckbox($name , $nameLabel , $value = "" , $classCss = "" )
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

  # input type  Multiples Checkbox
  public function elementMultiCheckbox($name , $nameLabel , $options_values  = array(), $classCss ="" )
  {
       $this->add(array(
               'type' => 'Zend\Form\Element\MultiCheckbox',
               'name' => $name ,
               'options' => array(
                       'label' =>  $nameLabel,
                       'label_attributes' => array('class' => $classCss),
                       'value_options' => $options_values ,
               )
       ));
  }

  # input type  Multiples radios
  public function elementMultiRadio($name , $nameLabel , $options_values  = array(), $classCss ="" )
  {
       $this->add(array(
               'type' => 'Zend\Form\Element\Radio',
               'name' => $name ,
               'options' => array(
                       'label' =>  $nameLabel,
                       'label_attributes' => array('class' => $classCss),
                       'value_options' => $options_values ,
               ),

       ));
  }

   # input type textarea
  public function elmentTextArea($name , $nameLabel , $value = "" , $classCss = "" )
  {
      $this->add(array(
            'type' => 'Zend\Form\Element\Textarea',
            'name' => $name,
            'options' => array(
                'label' =>  $nameLabel,
            ),
            'attributes' => array(
                'value' => $value ,
                'class' => $classCss ,
                'id' => $name ,
            ),
        ));
  }

  # input type file
  public function elementFile($name , $nameLabel )
  {
      // File element
      $file = new Element\File($name);
      $file->setLabel($nameLabel)
           ->setAttribute('id', $name);
      $this->add($file);
  }

  /* options_values =  array(
       '0' => 'Apple',
       '1' => 'Orange',
       '2' => 'Lemon',
    )*/

   # type select option
  public function elementSelect($name , $nameLabel , $options_values  = array()  , $classCss = "", $optionEmpty = '[Seleccionar Opcion ]' )
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


  # input type Submit
  public function elementSubmit($name , $nameLabel , $classCss = "btn" )
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

    # button type button
  public function elementButton($name , $nameLabel  , $onclick = "", $classCss = "btn" )
  {
     $this->add(array(
          'type' => 'Button',
          'name' => $name,
          'options' => array(
              'label'   => $nameLabel,
              /*'label'   => '<i class="icon-save"></i>'. $nameLabel,
              'label_options' => array(
                'disable_html_escape' => true,
              ),*/
          ),
          'attributes' => array(
              'id'      => $name,
              'class'   => $classCss,
              'onclick' =>  $onclick ,
              'value' => $nameLabel,
              'title' => $nameLabel,
          )
      ));
  }

}