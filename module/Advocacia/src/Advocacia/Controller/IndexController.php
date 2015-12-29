<?php
namespace Advocacia\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

use Zend\Paginator\Paginator,
        Zend\Paginator\Adapter\ArrayAdapter;

use Advocacia\Form\CadastroForm;


class IndexController extends AbstractActionController {
    
    public function indexAction() {
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $repo = $em->getRepository('Advocacia\Entity\Cadastro');
        $cadastro = $repo->findAll();   
        
        //Paginação
        $page= $this->params()->fromRoute('page');
        $paginator = new Paginator(new ArrayAdapter($cadastro));
        $paginator->setCurrentPageNumber($page);
        $paginator->setDefaultItemCountPerPage(4);
        return new ViewModel(['cadastro' => $paginator, 'page' => $page]);
  
    }
    
    
    public function novoclienteAction(){
      
        $form = new CadastroForm();
        $request = $this->getRequest();
        if($request->isPost()){
            $form->setData($request->getPost());
            if($form->isValid()){
                $service = $this->getServiceLocator()->get('Advocacia\Service\Cadastro');
                $service->insert($request->getPost()->toArray());
               return $this->redirect()->toRoute("home",array('controller' => 'cadastro'));
            }
        }
        
        return new ViewModel(['form' => $form]);
    }
    
    
    public function editAction(){
        $form = new CadastroForm();
        $request = $this->getRequest();
        $repository = $this->getEm()->getRepository('Advocacia\Entity\Cadastro');


        $entity = $repository->find($this->params()->fromRoute('id',0));

        if($this->params()->fromRoute('id',0)){
            $form->setData($entity->toArray());
        }
        
        if($request->isPost()){
            $form->setData($request->getPost());
            if($form->isValid()){
                $service = $this->getServiceLocator()->get('Advocacia\Service\Cadastro');
                $service->update($request->getPost()->toArray());
                return $this->redirect()->toRoute("home",array('controller' => 'cadastro'));
            }
        }
        
        return new ViewModel(['form' => $form]);
           
    }
    
      /*
     * @return EntityManager
     */
    protected function getEm()
    {
        if(null == $this->em)
                $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        return $this->em;
    }
 
    
}
