<?php
class desenho{
  public function __construct($oJarro1, $oJarro2){
    for ($i=0; $i<$oJarro1->tamanho;$i=$i+1){
      if($oJarro1->qnt_agua==$oJarro1->tamanho-$i){
        echo(" |-----|");
      }else{
        if ($i+1==$oJarro1->tamanho){
          echo(" |_____|");
        }else{
          echo(" |     |");
        }
      }
      if ($oJarro1->tamanho-$i<=$oJarro2->tamanho){
        if($oJarro2->qnt_agua==$oJarro2->tamanho-$i){
          echo("     |-----|");
        }else{
          if ($i+1==$oJarro1->tamanho){
            echo("     |_____|");
          }else{
            echo("     |     |");
          }
        }
      }
      echo("\n");
    }
    echo("Jarro1: ".$oJarro1->tamanho."L e Jarro2: ".$oJarro2->tamanho."L \n");
  }
  public function desenhar($oJarro1, $oJarro2){
    for ($i=0; $i<$oJarro1->tamanho;$i++){
        if($oJarro1->qnt_agua==$oJarro1->tamanho-$i){
            echo(" |-----|");
        }else{
            if ($i+1==$oJarro1->tamanho){
                echo(" |_____|");
            }else{
                echo(" |     |");
            }
        }
        if ($oJarro1->tamanho-i<=$oJarro2->tamanho){
            if($oJarro2->qnt_agua==$oJarro1->tamanho-$i){
                echo("     |-----|");
            }else{
                if ($i+1==$oJarro1->tamanho){
                    echo ("     |_____|");
                }else{
                    echo ("     |     |");
                }
            }

        }
        echo"\n";
    }
  }
}
?>