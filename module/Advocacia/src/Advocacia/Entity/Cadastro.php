<?php
namespace Advocacia\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="Advocacia\Entity\CadastroRepository")
 */
class Cadastro {
    
    public function __construct($options = null)
    {
            Configurator::configure($this,$options);

    }
    
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
    protected $nomecompleto;
    
    
    /**
     *@ORM\Column(type="string",length=200)
     */
    protected $cpfcnpj;
            
    function getId() {
        return $this->id;
    }

    function getNomecompleto() {
        return $this->nomecompleto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomecompleto($nomecompleto) {
        $this->nomecompleto = $nomecompleto;
    }




}
