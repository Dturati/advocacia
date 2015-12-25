<?php
namespace Advocacia\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;


class IndexController extends AbstractActionController {
    
    public function indexAction() {
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $repo = $em->getRepository('Advocacia\Entity\Cadastro');
        $cadastro = $repo->findAll();

       return new ViewModel(['cadastro' => $cadastro]);
       
    }
    
}
