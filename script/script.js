(function(){

		// var dominoss = [];

		// for (var i = 0; i < 24; i++) {
		// 	var domin = {
		// 		id: i % 12
		// 	};
		// 	dominoss.push(domin);
		// 	// console.log(dominoss);
		// }
	 iniciandoJogo();

	function iniciandoJogo(){

		// dominoss = embaralharDominos(dominoss);

		// var frenteFaces = document.getElementsByClassName("frenteDomino");

		// Método que faz a distribuição dos dominós
		for (var i=0; i < 24; i++){
			var domino = document.querySelector("#domino" + i);
			domino.style.left = i % 12 === 0  ? 5 + "px"  : i % 12 * 60 + 10 + "px" ;
			domino.style.top = i < 12 ? 5 + "px" : 110 + "px";
			// console.log(domino);

		// Método que faz com que quando os dominós virem quando forem clicados 
			domino.addEventListener("click", virandoDomino,false);

			// frenteFaces[i].setAttribute("id",dominoss[i].id);
			// console.log(dominoss[i].id);

		}

	}


	// function embaralharDominos(arrayAnterior){
	// 	// console.log(Math.floor(Math.random()*11));// gerar números aleatórios 
	// 	var novoArray = [];

	// 	// laço para verificar se possui o mesmo numero de elementos do array antigo
	// 	while(novoArray.length !== arrayAnterior.length){
	// 		var i = Math.floor(Math.random()*arrayAnterior.length);

	// 		if(novoArray.indexOf(arrayAnterior[i]) < 0 ){
	// 			novoArray.push(arrayAnterior[i]);
	// 		}
	// 	}

	// 	return novoArray;
	// }

	function virandoDomino(){
		var faces = this.getElementsByClassName("face");
		// console.log(faces);
		faces[0].classList.toggle("virandoDom");
		faces[1].classList.toggle("virandoDom");
		// console.log(faces[0].classList);

		
	}

	
	// Método para arrastar os dominós na tela
	// Função que será executada quando iniciar o arrasto do dominó
	// Esta função irá retornar o ID do elemento clicado

	// function dragStart(ev){
	// 	// dataTransfer contém o elemento que foi clicado ou passado como parâmetro
	// 	// setData é inserido um elemento
	// 	ev.dataTransfer.setData("ID",ev.target.getAttribute('id'));

	// }

	// // Função para eveitar que um elemento quando clicado fique selecionado

	// function dragOver(ev){
	// 	return false;
	// }

	// // Função que será executado quando soltar o dominó
	// function dragDrop(ev){
	// 	var dominoSelecionado = ev.dataTransfer.getData("ID");
	// 	// appendChild: adicionando um filho
	// 	ev.target.appendChild(document.getElementById(dominoSelecionado));
	// }
	

	}());


function dragStart(ev){
		// dataTransfer contém o elemento que foi clicado ou passado como parâmetro
		// setData é inserido um elemento
		ev.dataTransfer.setData("ID",ev.target.getAttribute('id'));

	}

	// Função para eveitar que um elemento quando clicado fique selecionado

	function dragOver(ev){
		return false;
	}

	// Função que será executado quando soltar o dominó
	function dragDrop(ev){
		var dominoSelecionado = ev.dataTransfer.getData("ID");
		// appendChild: adicionando um filho
		ev.target.appendChild(document.getElementById(dominoSelecionado));
	}
	