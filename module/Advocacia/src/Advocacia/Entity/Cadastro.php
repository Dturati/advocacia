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
    
    /**
     *@ORM\Column(type="string",length=200)
     */
    protected $RG;
    
    /**
     * @ORM\Column(type="string",length=200)
     */
    
    /**
     *@ORM\Column(type="string",length=200)
     */
    protected $datahoracadastro;
    
    /**
     * @ORM\Column(type="string",length=200)
     */
    protected $tipo;
            
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

    function getCpfcnpj() {
        return $this->cpfcnpj;
    }

    function getRG() {
        return $this->RG;
    }

    function getDatahoracadastro() {
        return $this->datahoracadastro;
    }

    function setCpfcnpj($cpfcnpj) {
        $this->cpfcnpj = $cpfcnpj;
    }

    function setRG($RG) {
        $this->RG = $RG;
    }

    function setDatahoracadastro($datahoracadastro) {
        $this->datahoracadastro = $datahoracadastro;
    }
    
    function getTipo() {
        return $this->tipo;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
     public function toArray()
    {
        return array("id"   =>  $this->getId(), 
            "nomecompleto"  =>  $this->getNomecompleto(),
            "cpfcnpj"       =>  $this->getCpfcnpj(),
            "RG"            =>  $this->getRG(),
            "tipo"          =>  $this->getTipo(),
        );
    }



}
