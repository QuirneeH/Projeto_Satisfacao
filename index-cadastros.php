<!DOCTYPE html>
<html lang="Pt-Br">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="X-UA-compatible" content="IE=Edge" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
	<link rel="stylesheet" href="./assets/css/modalcss/style.css" />
	<link rel="stylesheet" href="./assets/css/modalcss/modal.css">
	<title>Cadastros</title>
	<style>
		/**
		* Tudo abaixo é referente aos modais/Pop-ups
		*/
		body, .button-modal {
			display: grid;
			justify-content: center;
			align-items: center;
			margin-top: 20px;
		}

		.cad-container {
			margin-top: 150vh;
		}

		.button-modal {
			width: 300px;
			height: 8vh;
			font-size: 23px;
			min-height: 14bh;
			min-width: 250px;
		}

		h2 {
			text-align: center;
		}

		label {
			font-weight: bold;
		}

		dialog {
			margin-top: 15vh;
			margin-left: 35vh;
			display: grid;
			justify-content: center;
			align-items: center;
			height: 100%;
		}
		
		/**
		* Responsividade da janela modal
		*/
		@media screen and (max-width: 885px) {
    		.cad-container {
				margin-right: -18.5vh;
      		}
		}
		@media screen and (max-height: 720px) {
    		dialog {
				display: grid;
				margin-top: 10vh;
      		}
    	}
		@media screen and (max-height: 610px) {
    		dialog {
				display: grid;
				margin-top: 1vh;
      		}
    	}
		@media screen and (max-height: 476px) {
    		.button-modal {
				height: 12vh;
			}
			.cad-container {
				margin-top: 135vh;
			}
    	}
		



	</style>
</head>

<body>
	<?php include_once("./assets/html/index-menu.html") ?>
	<div class="cad-container">
		<h2>Cadastros</h2>

		<!--Botões com opções de ações para administrador do sistema-->
		<button class="button-modal" id="setLocal">Cadastrar Local</button>
		<button class="button-modal" id="setSetor">Cadastrar Setor</button>
		<button class="button-modal" id="setUsuario">Cadastrar Usuário</button>
		<section class="modal-bg">
			<dialog id="id01" class="modal">
				<span class="close" title="Close Modal">×</span>
				<form name="form" class="modal-content animate" action="action_page.php" method="post">
					<div class="container">
					</div>
					<div class="clearfix">
						<button type="button" class="cancelbtn">Cancelar</button>
						<button type="submit" class="signupbtn">Cadastrar</button>
					</div>
				</form>
			</dialog>
		</section>
	</div>
	<script type="module" src="./assets/js/modaljs/script.js"></script>
</body>

</html>