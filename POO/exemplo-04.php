<?php 

class Endereco
{
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($l, $n, $c)
	{
		$this->logradouro = $l;
		$this->numero = $n;
		$this->cidade = $c;
	}
	public function __destruct()
	{
		var_dump("DESTRUIR");
	},

	public function __toString()
	{
		return $this->logradouro.", ".$this->numero.", ".$this->cidade. "<br>";
	}

}

$meuEndereco = new Endereco("Rua Exemplo", "123", "Exemplo");

//var_dump($meuEndereco);
echo $meuEndereco;

//unset($meuEndereco);



 ?>