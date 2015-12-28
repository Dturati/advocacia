<?php
namespace Advocacia\Service;

use Doctrine\ORM\EntityManager;
use Advocacia\Entity\Cadastro as Cadastrar;

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

}
