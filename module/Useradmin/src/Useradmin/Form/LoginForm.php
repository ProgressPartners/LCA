<?php
namespace Useradmin\Form;

use Zend\Form\Form;

class LoginForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('Login');
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype', 'multipart/form-data');


        $this->add(array(
            'name' => 'username',
            'attributes' => array(
                'type' => 'text',
                'required' => 'required'
            ),
            'options' => array(
                'label' => 'User Name',
            ),
        ));

        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type' => 'password',
                'required' => 'required'
            ),
            'options' => array(
                'label' => 'Password',
            ),
        ));

        $this->add(array(
            'name' => 'server',
            'attributes' => array(
                'type' => 'text',
                'required' => 'required'
            ),
            'options' => array(
                'label' => 'Server',
            ),
        ));

        $this->add(array(
            'name' => 'database',
            'attributes' => array(
                'type' => 'text',
                'required' => 'required'
            ),
            'options' => array(
                'label' => 'Database',
            ),
        ));


        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Login'
            ),
        ));
    }
}
