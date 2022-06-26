<?php

abstract class Animal {

	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Anda";
	}
}


class Cachorro extends Animal{

	public function falar(){
		return "Late";
	}
}

class Gato extends Animal{

	public function falar(){
		return "Mia";
	}
}

class Passaro extends Animal{

	public function falar(){
		return "Canta";
	}

	public function mover(){
		return "Voa e " . parent::mover();
	}
}

$pluto = new Cachorro();
echo "Esse é o meu cachorro Pluto:" . "<br>";

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "<br>";

$tom = new Gato();
echo "Esse é o meu gato Tom:" . "<br>";

echo $tom->falar() . "<br>";
echo $tom->mover() . "<br>";
echo "<br>";

$picapau = new Passaro();
echo "Esse é o meu pássaro Pica-pau:" . "<br>";

echo $picapau->falar() . "<br>";
echo $picapau->mover() . "<br>";
echo "<br>";

?>