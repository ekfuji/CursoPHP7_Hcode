<?php 

class Pessoa
{
	public $nome = "Rasmus Lerdof";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados()
	{
		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}


}

class Programador extends Pessoa 
{
	public function verDados()
	{
		echo get_class($this) . "<br/>";
		//o método ver dados está vindo da Classe Programador
		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";// não exibe pois é um atributo privado da classe Pessoa
	}


}
	$objeto = new Programador();

	//echo $objeto->idade . "<br/>";

	$objeto->verDados();


 ?>