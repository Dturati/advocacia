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
                         'class'        =>       "form-control"
          ),
      ));
      
        $this->add(array(
         'name'         => 'cpfcnpj',
          'options'     => array(
                                'type'      => 'text',
                                 'label'    => 'CPF-CNPJ',
          ),
          'attributes'  =>  array(
                        'id'            =>      'cpfcnpj',
                        'placeholder'   =>      'Entre com o CPF ou CNPJ', 
                         'class'        =>       "form-control"
          ),
      ));
        
        $this->add(array(
         'name'         => 'RG',
          'options'     => array(
                                'type'      => 'text',
                                 'label'    => 'RG',
          ),
          'attributes'  =>  array(
                        'id'            =>      'RG',
                        'placeholder'   =>      'Entre com o RG',
                        'class'        =>       "form-control"
          ),
      ));
        
        
          $this->add(array(
         'name'         => 'tipo',
          'options'     => array(
                                'type'      => 'text',
                                 'label'    => 'Tipo cliente',
          ),
          'attributes'  =>  array(
                        'id'            =>      'tipo',
                        'placeholder'   =>      'Entre com o tipo do cliente',
                        'class'        =>       "form-control"
          ),
      ));
      
      
       $this->add(array(
                'name' => 'submit',
                'type'  => 'Zend\Form\Element\Submit',
                'attributes'    => array(
                    'value'     => 'Salvar',
                    'class'     => "btn btn-default"
                )
        ));
      
      
  }
    
    
}
