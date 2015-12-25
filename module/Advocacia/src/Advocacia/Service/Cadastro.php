<?php
namespace Advocacia\Service;

use Doctrine\ORM\EntityManager;
use Advocacia\Entity\CadastroService;

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
    
 

}
