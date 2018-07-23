<?php 
abstract class Animal
{
	public function falar()
	{
		return "som";
	}
	public function mover()
	{
		return "anda";
	}
}
class Cachorro extends Animal
{
	public function falar()
	{
		return "late";
	}

}
class Gato extends Animal
{
	public function falar()
	{
		return "mia";
	}
}
class Passaro extends Animal
{
	public function falar()
	{
		return "canta";
	}
	public function mover()
	{
		return "voa e " . parent ::mover();
	}
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";
echo "----------------------------><br/>";
$garfild = new Gato();
echo $garfild->falar() . "<br/>";
echo "----------------------------><br/>";
$canario= new Passaro();

echo $canario->falar() . "<br/>";
echo $canario->mover() . "<br/>";
 ?>