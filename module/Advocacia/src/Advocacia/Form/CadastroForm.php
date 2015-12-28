<?php
namespace Advocacia\Form;

Use Zend\Form\Form;

class CadastroForm extends Form
{
    
  public function __construct() {
      parent::__construct("cadastro");
      $this->setAttribute("method", "post");
      $this->setInputFilter(new CadastroFilter());
      
      $this->add(array(
         'name' => 'id',
          'attributes'  =>  array(
            'type'      => 'Hidden'  
          ),
      ));
      
      
      $this->add(array(
         'name'         => 'nomecompleto',
          'options'     => array(
                                'type'      => 'text',
                                 'label'    => 'Nome',
          ),
          'attributes'  =>  array(
                        'id'            =>      'nomecompleto',
                        'placeholder'   =>      'Digite o nome',     
          ),
      ));
      
      
       $this->add(array(
                'name' => 'submit',
                'type'  => 'Zend\Form\Element\Submit',
                'attributes'    => array(
                    'value'    => 'Salvar',
                    'class'     => 'btn-success'
                )
        ));
      
      
  }
    
    
}
