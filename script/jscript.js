(function() {


	iniciarJogo(); //Chamando a função

	// método que será executado quando o jogo for iniciado
	function iniciarJogo(){
		for (var i = 0; i < 24; i++) {
		// 	var domino = document.getSelectoById();

		// pegando o identificador dos dominós e guardando na váriavel dominó, ou seja, identificador será: #domino0 e será incrementado até 24
			var domino = document.querySelector("#domino" + i);
			// mexendo com a configuração left do CSS  dos dominós
			if ( i % 12 === 0 ) { // se o módulo de i por 12 for igual a zero
			domino.style.left =  5 + "px"; // o dominó sofrerá um espaçamento de 5px a esquerda
			} else{ // se não...
				domino.style.left = i % 12 * 60 + 10 + "px"; // irá pegar o resto da divisão multiplicar por 60 e acrescentar 10px a esquerda
			}
			// mexendo com a configuração top do CSS  dos dominós
			if (i < 12) { // se i for menor que 12
				domino.style.top = 3 + "px"; // o dominó um espaçamento de 5px em relação ao topo
			}else{ //se não...
				domino.style.top = 110 + "px"; // o dominó um espaçamento de 100px em relação ao topo
			}

			// Método que faz com que quando os dominós virem quando forem clicados
			domino.addEventListener("click", virandoDomino,false);
		}

		function virandoDomino(){
		var faces = this.getElementsByClassName("face");
		// console.log(faces);

		faces[0].classList.toggle("virandoDom");
		faces[1].classList.toggle("virandoDom");
	}
	}

	// function dragStart(ev){
	// 	// dataTransfer contém o elemento que foi clicado ou passado como parâmetro
	// 	// setData é inserido um elemento
	// 	ev.dataTransfer.setData("ID",ev.target.getAttribute('id'));
	//
	// }
	//
	// // Função para eveitar que um elemento quando clicado fique selecionado
	//
	// function dragOver(ev){
	// 	return false;
	// }
	//
	// // Função que será executado quando soltar o dominó
	// function dragDrop(ev){
	// 	var dominoSelecionado = ev.dataTransfer.getData("ID");
	// 	// appendChild: adicionando um filho
	// 	ev.target.appendChild(document.getElementById(dominoSelecionado));
	// }

	//
	// function allowDrop(ev) {
	//     ev.preventDefault();
	// }
	//
	// function drag(ev) {
	//     ev.dataTransfer.setData("div",ev.target.getAttribute('id'));
	// }
	//
	// function drop(ev) {
	//     ev.preventDefault();
	//     var data = ev.dataTransfer.getData("div");
	//     ev.target.appendChild(document.getElementById(data));
	// }


	// function allowDrop(ev) {
	//     ev.preventDefault();
	// }
	//
	// // function drag(ev) {
	// //     ev.dataTransfer.setData("text", ev.target.id);
	// // }
	// //
	// // function drop(ev) {
	// //     ev.preventDefault();
	// //     var data = ev.dataTransfer.getData("text");
	// //     ev.target.appendChild(document.getElementById(data));
	// // }

	function allowDrop(ev){
		ev.preventDefault();
	}

	function dragDrop(ev){
		ev.dataTransfer.setData("text",ev.target.id);
	}

	function drop(ev){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		ev.target.appendChild(document.getElementById(data));
	}

	$(document).ready(function(){
	    $("button").click(function(){
	        $("#montante").animate({
						width: 'toggle'
					});

	    });
	});



}());
