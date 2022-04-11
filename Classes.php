<?php

//Abstração
class Pessoa {
    var $nome;
    var $cpf;
    var $rg;
    var $data_nasc;
    var $sexo;

    public function falar(){

    }

    public function andar(){
        echo"<h1>Bom dia, gostaria de obter informações sobre esse carro.</h1>";
    }
}

//Abstração e hierarquia
class Cliente extends Pessoa{
    var $comprov_res;

    public function comprarCarro(string $modelo){

    }
    //Polimorfismo
    public function falar(){
        echo"<h1>Tudo bem então, irei comprar esse carro mesmo.</h1>";
    }
}

//Abstração
class Carro{
    var $marca;
    var $modelo;
    var $ano;

    public function ligar(){

    }

    public function locomover(){

    }
}

//Abstração e encapsulamento
class Venda{
    //Encapsulamento
    private $vendedor;
    private $produto;
    private $comprador;
    var $data_venda;
    var $valor_venda;

    public function data_venda(){

    }

    public function cancelarVenda(){

    }
    
    public function getVendedor()
    {
        return $this->vendedor;
    }

    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;

        return $this;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setProduto($produto)
    {
        $this->produto = $produto;

        return $this;
    }

    public function getComprador()
    {
        return $this->comprador;
    }
   
    public function setComprador($comprador)
    {
        $this->comprador = $comprador;

        return $this;
    }
}