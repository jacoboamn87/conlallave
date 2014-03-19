<?php

/**
 * Contact form.
 *
 * @package    conlallave
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContactForm extends BaseContactForm {

    public function configure() {
        unset($this['created_at'],$this['updated_at']);
        
        $this->widgetSchema['utm_campaign'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['utm_source'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['utm_medium'] = new sfWidgetFormInputHidden();
        
        $this->getWidget('name')->setAttributes(array('maxlength' => 100, 'data-bvalidator' => 'minlength[3],maxlength[100],validateregex,required', 'data-bvalidator-msg' => 'Ingrese su nombre sin caracteres especiales.'));
        $this->getWidget('email')->setAttributes(array('data-bvalidator' => 'email, required', 'data-bvalidator-msg' => 'Dirección de correo electrónico inválida.'));
        $this->getWidget('phone')->setAttributes(array('maxlength' => 11, 'data-bvalidator' => 'digit,minlength[11],required', 'data-bvalidator-msg' => 'Ingrese solo dígitos, incluyendo el código de área u operadora.'));
        
        $this->setValidator('name', new sfValidatorAnd(
                    array(
                        new sfValidatorString(
                            array('required' => true,'trim' => true, 'min_length' => 2, 'max_length' => 100),
                            array('required' => 'Campo obligatorio.', 'min_length' => 'Debe contener entre %min_length% y %max_length% caracteres.', 'max_length' => 'Debe contener entre %min_length% y %max_length% caracteres.')
                        ),
                        new sfValidatorRegex(array('pattern' => '/^[^<>_&\|\$]+$/'), array('invalid' => 'Caracter inválido.'))
                    ),
                    array(),
                    array('required' => 'Campo obligatorio.')
                ));
        
        $this->setValidator('email', new sfValidatorAnd(
                    array(
                        new sfValidatorEmail(array('required' => true, 'trim' => true), array('invalid' => 'Correo electrónico inválido.')),
                        new sfValidatorString(array('required' => true, 'max_length' => 100))
                    ),
                    array(),
                    array('required' => 'Campo obligatorio.')
                ));
        
        $this->setValidator('phone', new sfValidatorRegex(array('pattern' => '/^[[:digit:]]+$/'), array('invalid' => 'Ingrese sólo dígitos.','required' => 'Campo obligatorio.')));
    }

}
