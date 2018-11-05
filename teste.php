<!-- <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Droppable - Default functionality</title>
  <link rel="stylesheet" href="jqueryUi/jquery-ui.css">
  <style>
  #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src= "jquery/jquery-3.3.1.min.js"></script>
  <script src="jqueryUi/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );
  </script>
</head>
<body>

<div id="draggable" class="ui-widget-content">
  <p>Drag me to my target</p>
</div>

<div id="droppable" class="ui-widget-header">
  <p>Drop here</p>
</div>


</body>
</html> -->


<?php
//include_once "controle/verficaLogin.php";

@session_start();

if(!isset($_SESSION['login'])){
  exit ("Você precisa fazer o login para ver está página!");
}

// include_once("bancoDados/conexao.php");
// if(!$conexaoBanco){
//   echo "Conexão não realizada!";
// }


// $imagem = mysqli_query("SELECT imagem from imagens_1 where cod_img = '1'");
// echo($imagem);
 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Dominó Matemático</title>

  <link rel="stylesheet" type= "text/css" href="css/style.css"/>
  <!--(rel="stylesheet"): passando que estaremos trabalhando com uma folha de estilo/css -->
  <!--(/jogodomino/css/style.css): passando qual é o nome do arquivo css -->
  <!--(/jogodomino/css/style.css): pasta jogodomino, dentro dessa pasta há uma outra pasta chamada css com um arquivo style.css -->

  <script src= "jquery/jquery-3.3.1.min.js"></script>
  <script src="jqueryUi/jquery-ui.js"></script>
  <link rel="stylesheet" href="jqueryUi/jquery-ui.css">

  <script>
  $( function() {
    $( ".dominos" ).draggable();
    $( ".jg2Pecas").droppable({

    //   // drop: function virandoDomino(){
  	// 	// var faces = this.getElementsByClassName("face");
  	// 	// // console.log(faces);
  	// 	// faces[0].classList.toggle("virandoDom");
  	// 	// faces[1].classList.toggle("virandoDom");
    // }


    });
  });
  </script>

</head>
<body>

  <div id="container">
<!-- pontucão jogador 2, espaço das peças jogador 2 -->
    <div id="containerMenor">

      <div id="topo">

        <!-- <div id="pontuacaoJg2">
          <p><b>Pontos:</b></p>
        </div> -->

        <div class= "containerPecas" id="containerJogador2"  >
          <div id="nomeJogador2" align="center" > <b>JOGADOR 2</b></div>

            <div class="jgPecas" id="jg2Peca1"  > </div>
            <div class="jgPecas" id="jg2Peca2" > </div>
            <div class="jgPecas" id="jg2Peca3"> </div>
            <div class="jgPecas" id="jg2Peca4"> </div>
            <div class="jgPecas" id="jg2Peca5"> </div>
            <div class="jgPecas" id="jg2Peca6"> </div>
            <div class="jgPecas" id="jg2Peca7"> </div>

          </div>

      </div>

<!-- Peças de Dominó e Montante -->
     <div id="conteudo">

       <button type="button" name="" id="botaoMontante"></button>


       <div class= "containerMontante" id="montante">
         <div id="nomeMontante" align="center"><b>MONTANTE</b></div>

         <div id="montPeca1"> </div>
         <div id="montPeca2"> </div>
         <div id="montPeca3"> </div>
         <div id="montPeca4"> </div>
         <div id="montPeca5"> </div>
         <div id="montPeca6"> </div>
         <div id="montPeca7"> </div>
         <div id="montPeca8"> </div>
         <div id="montPeca9"> </div>
         <div id="montPeca10"> </div>

        </div>

    <div class="dominos" id="domino0"  draggable="true" ondragstart="event.dataTransfer.setData('text/plain', 'This text may be dragged')">
          <div class="face versoDomino" ></div>
          <div class="face frenteDomino" >
          <span><img src="dominos/dom0.png"></span>
        </div>

      </div>


        <div class="dominos" id="domino1">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom1.png" >
          </div>
        </div>


        <div class="dominos" id="domino2">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom2.png" alt="">
          </div>
        </div>


        <div class="dominos" id="domino3">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom3.png" alt="">
          </div>
        </div>

        <div class="dominos" id="domino4">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom4.png" alt="">
          </div>
        </div>

        <div class="dominos" id="domino5">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom5.png" alt="">
          </div>
        </div>

        <div class="dominos" id="domino6">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom6.png" alt="">
          </div>
        </div>


        <div class="dominos" id="domino7">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom7.png" alt="">
          </div>
        </div>


        <div class="dominos" id="domino8">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
              <img src="dominos/dom8.png" alt="">
          </div>
        </div>


        <div class="dominos" id="domino9">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
              <img src="dominos/dom9.png">
          </div>
        </div>


        <div class="dominos" id="domino10">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom10.png">
          </div>
        </div>


        <div class="dominos" id="domino11">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom11.png">
          </div>
        </div>


        <div class="dominos" id="domino12">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom12.png">
          </div>
        </div>

        <div class="dominos" id="domino13">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom13.png">
          </div>
        </div>

        <div class="dominos" id="domino14">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom14.png">
          </div>
        </div>


        <div class="dominos" id="domino15">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom15.png">
          </div>
        </div>

        <div class="dominos" id="domino16">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom16.png">
          </div>
        </div>

        <div class="dominos" id="domino17">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom17.png">
          </div>
        </div>


        <div class="dominos" id="domino18">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom18.png">
          </div>
        </div>


        <div class="dominos" id="domino19">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom19.png">
          </div>
        </div>


        <div class="dominos" id="domino20">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom20.png">
          </div>
        </div>


        <div class="dominos" id="domino21">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom21.png">
          </div>
        </div>


        <div class="dominos" id="domino22">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom22.png">
          </div>
        </div>


        <div class="dominos" id="domino23">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <img src="dominos/dom23.png">
          </div>
        </div>

      </div>

      <!-- Pontuação Jogador 1 e espaço Jogador 1-->
      <div id="base">
        <!-- <div id="pontuacaoJg1">
          <p><b>Pontos:</b> </p>
        </div> -->

        <div class= "containerPecas" id="containerJogador1">
          <div id="nomeJogador1" align="center"> <b>JOGADOR 1</b> </div>

          <div class="jgPecas" id="jg1Peca1"> </div>
          <div class="jgPecas" id="jg1Peca2"> </div>
          <div class="jgPecas" id="jg1Peca3"> </div>
          <div class="jgPecas" id="jg1Peca4"> </div>
          <div class="jgPecas" id="jg1Peca5"> </div>
          <div class="jgPecas" id="jg1Peca6"> </div>
          <div class="jgPecas" id="jg1Peca7"> </div>

        </div>

      </div>

    </div>
  </div>

<script type="text/javascript" src="script/jscript.js"></script>

</body>
</html>
