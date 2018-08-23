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
  <!-- <style media="screen"> </style> -->


</head>
<body>

  <div id="container">
<!-- pontucão jogador 2, espaço das peças jogador 2 -->
    <div id="containerMenor">

      <div id="topo">

        <div id="pontuacaoJg2">
          <p><b>Pontos:</b></p>
        </div>

        <div id="peca" ondrop="drop(event)" ondragover="allowDrop(event)" >

        </div>

        <div class= "containerPecas" id="containerJogador2" ondrop="drop(event)" ondragover="allowDrop(event)" >
            <div id="nomeJogador2" align="center" > <b>JOGADOR 2</b></div>

            <div id="jg2Peca1" ondrop="drop(event)" ondragover="allowDrop(event)"> </div>
            <div id="jg2Peca2"> </div>
            <div id="jg2Peca3"> </div>
            <div id="jg2Peca4"> </div>
            <div id="jg2Peca5"> </div>
            <div id="jg2Peca6"> </div>
            <div id="jg2Peca7"> </div>

          </div>

      </div>

<!-- Peças de Dominó e Montante -->
     <div id="conteudo" ondrop="drop(event)" ondragover="allowDrop(event)">

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

    <div class="dominos" id="domino0" draggable="true" ondragstart="drag(event)" width="50px" height="90px">
          <div class="face versoDomino" ></div>
          <div class="face frenteDomino">
            <div class="dominoSuperior centralizado">
              <b>9x10</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>80</b>
            </div>
          </div>
        </div>
        </span>

        <div class="dominos" id="domino1">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">
            <div class="dominoSuperior centralizado">
              <b>5x5</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>90</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino2">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>1x6</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>25</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino3">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>8x1</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>6</b>
            </div>
          </div>
        </div>

        <div class="dominos" id="domino4">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>5x2</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>8</b>
            </div>
          </div>
        </div>

        <div class="dominos" id="domino5">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>3x4</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>10</b>
            </div>
          </div>
        </div>

        <div class="dominos" id="domino6">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>2x9</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>12</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino7">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>10x2</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>18</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino8">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>6x4</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>20</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino9">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>5x6</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>24</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino10">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>4x10</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>30</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino11">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>1x4</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>40</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino12">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>3x3</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>4</b>
            </div>
          </div>
        </div>

        <div class="dominos" id="domino13">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>8x2</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>9</b>
            </div>
          </div>
        </div>

        <div class="dominos" id="domino14">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>5x1</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>16</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino15">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>3x5</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>5</b>
            </div>
          </div>
        </div>

        <div class="dominos" id="domino16">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>9x3</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>15</b>
            </div>
          </div>
        </div>

        <div class="dominos" id="domino17">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>4x7</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>27</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino18">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>7x5</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>28</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino19">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>6x7</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>35</b>
            </div>
          </div>
        </div>

        <div class="dominos" id="domino20">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>9x6</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>42</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino21">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>6x10</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>54</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino22">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>9x7</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>60</b>
            </div>
          </div>
        </div>


        <div class="dominos" id="domino23">
          <div class="face versoDomino"></div>
          <div class="face frenteDomino">

            <div class="dominoSuperior centralizado">
              <b>8x10</b>
            </div>
            <hr class="divisoria"/>
            <div class="dominoInferior centralizado">
              <b>63</b>
            </div>

          </div>
        </div>

      </div>

      <!-- Pontuação Jogador 1 e espaço Jogador 1-->
      <div id="base">
        <div id="pontuacaoJg1">
          <p><b>Pontos:</b> </p>
        </div>

        <div class= "containerPecas" id="containerJogador1">
          <div id="nomeJogador1" align="center"> <b>JOGADOR 1</b> </div>

          <div id="jg1Peca1"> </div>
          <div id="jg1Peca2"> </div>
          <div id="jg1Peca3"> </div>
          <div id="jg1Peca4"> </div>
          <div id="jg1Peca5"> </div>
          <div id="jg1Peca6"> </div>
          <div id="jg1Peca7"> </div>

        </div>

      </div>

    </div>
  </div>

<script type="text/javascript" src="script/jscript.js"></script>

</body>
</html>
