<?php
echo"Jogo dos jarros \n";

$opcao=0;
$opcao2=0;
$ponto_best=1000;

$capacidade_j1=5;
$capacidade_j2=3;
$objetivo=4;
$Jogador1="           ";
$Jogador_best= "PC";
while($opcao!=3){
  $jogada=0;
  
  echo("------Jogo dos JARROS-----\n");
  echo("Melhor Jogador: ".$Jogador_best." com".$ponto_best."jogadas\n");
  echo("Menu:\n");
  echo("1- Jogar\n");
  echo("2- Opções\n");
  echo("3- Sair\n");

  cin>>opcao;

  if(opcao==1){
          echo("Objetivo: encher um dos jarros com ".objetivo." litros\n");
          echo("Digite o nome do Jogador:\n");
          cin>>Jogador1;
          //criar os objetos
          $player1 = new Jogador($Jogador1, 0);
          $j1 = new Jarro("1",$capacidade_j1,0);
          $j2 = new Jarro("2",$capacidade_j2,0);
          $op="";

          $d=new Desenho($j1,$j2);

          $jarro_selecionado=0;
          while($j1->qnt_agua!=$objetivo && $j2->qnt_agua!=$objetivo){
              $jogada++;
              echo("Qual jarro deseja escolher?\n");
              cin>>jarro_selecionado;
              echo("Qual ação deseja?\n");
              echo("(E)ncher, E(s)vaziar, (T)rocar\n");
              cin>>op;
              if ($jarro_selecionado==1){                    
                  if ($op==("E")||$op==("e")){
                    $j1=$player1->encher($j1);
                  }else if($op==("s")||$op==("S")){
                    $j1=$player1->esvaziar($j1);
                  }else if($op==("T")||$op==("t")){
                    $player1->trocar($j1, $j2);
                  }else{
                      echo"problema ao escolher a opção \n";
                  }
              }else if ($jarro_selecionado==2){
                  if ($op==("E")||$op==("e")){
                      $j2=$player1->encher($j2);
                  }else if($op==("s")||$op==("S")){
                      $j2=$player1->esvaziar($j2);
                  }else if($op==("T")||$op==("t")){
                      $player1->$trocar($j2, $j1);
                  }else{
                      echo"problema ao escolher a opção \n";
                  }
              }
              $d->desenhar($j1,$j2);
              echo("Jarro1 com ".$j1->qnt_agua."L e Jarro2 com ".$j2->qnt_agua."L \n");

          }
          echo("Parabéns! ".$Jogador1." você venceu com ".$jogada." jogadas!\n\n");
          if($jogada<=$ponto_best){
              $ponto_best=$jogada;
              $Jogador_best=$Jogador1;
          }
  }else if($opcao==2){
      while ($opcao2!=3){
          echo("1- Alterar jarros\n");
          echo("2- Alterar objetivo\n");
          echo("3- Retornar ao menu principal\n");
          cin>>opcao2;
          if ($opcao2==1){
              echo("Digite o tamanho do jarro maior:\n");
              cin>>capacidade_j1;
              echo("Digite o tamanho do jarro menor:\n");
              cin>>capacidade_j2;
          }else if ($opcao2==2){
              echo("Digite o valor de agua que será o objetivo:\n");
              cin>>objetivo;
          }
      }
  }else if($opcao==3){
      echo"Obrigado por jogar!\n";
  }else{
      echo"opção inválida!";
  }

  }