<?php
class jogador{
  public $nome;
  public $movimentos;

  public function __construct($nome){
    $this->movimentos = 0;
    $this->nome = $nome;
    echo("Seja Bem-vindo ".$nome."\n");
  }
  public function __destruct() {
      echo("Bye-bye".$this->nome."\n");
    }
  public function encher($oJarro){
    $oJarro->qnt_agua = $oJarro->tamanho;
  }
  public function esvaziar($oJarro){
    $oJarro->qnt_agua = 0;
  }
  public function trocar($oJarro1, $oJarro2){
    if ($oJarro1->qnt_agua>0){
      if($oJarro2->tamanho-$oJarro2->qnt_agua>=$oJarro1->qnt_agua){
          $oJarro2->qnt_agua=($oJarro2->qnt_agua+$oJarro1->qnt_agua);
          $oJarro1->qnt_agua=0;
      }else{
          $resto1=$oJarro1->qnt_agua-($oJarro2->tamanho-$oJarro2->qnt_agua);
          $oJarro1->qnt_agua=resto1;
          $oJarro2->qnt_agua=$oJarro2->tamanho;
      }
    }
  }
}
?>