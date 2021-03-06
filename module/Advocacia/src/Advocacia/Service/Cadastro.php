<?php
namespace Advocacia\Service;

use Doctrine\ORM\EntityManager;
use Advocacia\Entity\Cadastro as Cadastrar;
use Advocacia\Entity\Configurator;

class Cadastro
{
    /**
     * @var EntityManager
     */
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    public function insert(array $data)
    {
        $entity = new Cadastrar($data);
        $this->em->persist($entity);
        $this->em->flush();
    }
    
    public function update(array $data){
        $entity = $this->em->getReference('Advocacia\Entity\Cadastro',$data['id']);
        $entity = Configurator::configure($entity,$data);

        $this->em->persist($entity);
        $this->em->flush();
        return $entity;
    }

}
