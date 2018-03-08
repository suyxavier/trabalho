<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 01/03/18
 * Time: 15:57
 */

class categoria
{
    private $id;
    private $nome;
    private $descricao;

    public function __construct($id, $nome, $descricao)
    {
        $this->id = $id;
        $this->id = $nome;
        $this->id = $descricao;


    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

}



$c1 = new categoria(1, 'esportes', 'Produtos de Esportes');
var_dump($c1);