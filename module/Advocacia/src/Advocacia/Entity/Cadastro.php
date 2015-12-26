<?php
namespace Advocacia\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="Advocacia\Entity\CadastroRepository")
 */
class Cadastro {
    
    /**
     *@ORM\Id
     * @ORM\GeneratedValue("AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $id_cliente;
    
    
    /**
     * @ORM\Column(type="string",length=200)
     */
    protected $nome_completo;
    
    
    /**
     *@ORM\Column(type="string",length=200)
     */
    protected $cpf_cnpj;
    
    
    /**
     *@ORM\Column(type="string",length=200)
     */
    protected $RG;

    
     /**
      * @ORM\Column(type="datetime",length=200)
      */
     protected $data_hora_cadastro;
     

    public function __construct($options = null)
    {
        Configurator::configure($this,$options);

    }
    
    function getId() {
        return $this->id_cliente;
    }

    function getNome() {
        return $this->nome_completo;
    }

    function setId($id) {
        $this->id_cliente = $id;
    }

    function setNome($nome) {
        $this->nome_completo = $nome;
    }
    
    function getCpf_cnpj() {
        return $this->cpf_cnpj;
    }

    function getRG() {
        return $this->RG;
    }

    function getData_hora_cadastro() {
        return $this->data_hora_cadastro;
    }

    function setCpf_cnpj($cpf_cnpj) {
        $this->cpf_cnpj = $cpf_cnpj;
    }

    function setRG($RG) {
        $this->RG = $RG;
    }

    function setData_hora_cadastro($data_hora_cadastro) {
        $this->data_hora_cadastro = $data_hora_cadastro;
    }


    
}
