<?php

namespace Advocacia;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Advocacia\Service\Cadastro as CadastroService;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__.'Admin'  => __DIR__ . '/src/' . __NAMESPACE__."Admin",
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    
    public function getServiceConfig()
    {
        
        return array(
        
        'factories' => array(
            
            'Advocacia\Service\Cadastro' => function ($service){
                        return new CadastroService($service->get('Doctrine\ORM\EntityManager'));
                },
            
            ),
        );
    }
}
