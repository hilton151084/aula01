<?php


 class Caneta

 {
 	public $cor;
 	public $marca;
 	public $tampada;

 	public function escrever(string $texto){

 		if ($this->tampada){

			echo "Primeiro destampe a caneta";

		} else {

			echo "Estou escrevendo" . $texto;
		}
	}
		
	public function destampar(){

		$this->tampada = false;
 }

 	public function tampar(){
		$this->tampada = true;
 }
}

 $caneta1 = new Caneta();
 $caneta1 -> cor ="Vermelha";
 $caneta1 -> marca="bic";
 $caneta2 = new Caneta ();
 $caneta2 -> cor="azul";
 $caneta2 -> marca="compactor";

$caneta1->destampar();
$caneta1->escrever("Estou escrevendo");
$caneta1->tampar();
$caneta1->escrever("não escrevo");