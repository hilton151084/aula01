<?php

class Carro
{
	public $cor;
	public $marca;
	public $modelo;
	public $velocidade;

	public function buzinar(){
		echo "Estou buzinando";
	}

	public function acelerar(){
		$this->velocidade +=10;

	}
	public function freiar(){
		$this->velocidade -=10;

	}
}

$uno = new Carro ();
$uno->cor = "Azul";
$uno->marca = "Fiat";
$uno->modelo = "1.0";
$uno->buzinar();
$uno->acelerar();
$uno->acelerar();
$uno->acelerar();
echo "Velocidade atual: " . $uno->velocidade . "<br>";
$uno->freiar();
echo "Velocidade atual: " . $uno->velocidade . "<br>";
var_dump($uno);
//$gol = new Carro ();
//$gol->cor = "Preto";
//$gol->marca = "Volks";
//$gol->modelo = "1.6";
//var_dump($gol);
