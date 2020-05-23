<?php
class jarro{
  public $tamanho;
  public $qnt_agua;
  public $nome;

  public function __construct($tamanho, $nome){
    $this->qnt_agua = 0;
    $this->nome = $nome;
    $this->tamanho = $tamanho;
    echo("Jarro ".$nome." criado!");
  }

  public function __destruct(){
    echo("Adeus Jarro ".$this->nome);
  }
}
?>