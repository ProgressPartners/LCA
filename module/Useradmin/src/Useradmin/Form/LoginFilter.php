<?php
namespace Useradmin\Form;

use Zend\InputFilter\InputFilter;

class LoginFilter extends InputFilter
{
    public function __construct()
    {
        $this->add(array(
            'name'       => 'username',
            'required'   => true,
            // removed validators as this is not email
//            'validators' => array(
//                array(
//                    'name'    => 'username',
//                    'options' => array(
//                        'domain' => true,
//                    ),
//                ),
//            ),
        ));

        $this->add(array(
            'name'       => 'password',
            'required'   => true,
        ));
        
        $this->add(array(
            'name'       => 'server',
            'required'   => true,
        ));
        
        $this->add(array(
            'name'       => 'database',
            'required'   => true,
        ));
    }
}
