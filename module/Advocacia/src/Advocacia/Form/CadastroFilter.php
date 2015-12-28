<?php
namespace Advocacia\Form;

use Zend\InputFilter\InputFilter;

class CadastroFilter extends InputFilter {
    
    public function __construct()
    {
     $this->add(array(
           'name' => 'nomecompleto',
            'required' => true,
            'filteres' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
            ),

            'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'option'    => array(
                            'messages'  => array('isEmpty' =>'Nome não pode estar em branco'),
                        ),
                    ),
             ),
        ));
    }
}
