<?php
namespace Advocacia\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cadastro")
 * @ORM\Entity(repositoryClass="Advocacia\Entity\CadastroRepository")
 */
class Cadastro {
    
    /**
     *@ORM\Id
     * @ORM\GeneratedValue("AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string",length=200)
     */
    protected $nome;
    
    
     public function __construct($options = null)
    {
        Configurator::configure($this,$options);

    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


    
}
