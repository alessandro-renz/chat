<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CHAT</title>
    <link rel="stylesheet" href="<?=URL?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  	<body>
    	<div class="container">
			<div class="row d-flex justify-content-center" style="height: 40vw;">
				<div class="col-sm-5 align-self-center">
					<div class="login-area">
							<div class="card">
							 	<div class="card-header bg-primary text-light">Register</div>
							 	<div class="card-body bg-light">
							 		<form action="<?=URL?>register/post" method="POST">
							 			<div class="form-group">
							 				<label for="nick">Nickname:</label>
							 				<input type="text" disabled name="nick" id="nick" class="form-control">
							 			</div>
							 			<div class="form-group">
							 				<label for="email">Email:</label>
							 				<input type="email" disabled name="email" id="email" class="form-control">
							 			</div>
							 			<div class="form-group">
							 				<label for="password">Senha:</label>
							 				<input type="password" disabled name="password" id="password" class="form-control">
							 			</div>
							 			
							 			<div class="alert alert-success">
							 				Usuario cadastrado com sucess. <a  class="alert-link" href="<?=URL.'login'?>">Quero logar agora!</a>
							 			</div>
							 		</form>
							 	</div>
							</div>
					</div>
				</div>
			</div>
					
		</div>
   
 

	    <!-- Arquivos javascript!-->
	  	<script type="text/javascript" src="<?=URL?>assets/js/jquery.js"></script>
	  	<script type="text/javascript" src="<?=URL?>assets/js/bootstrap.bundle.min.js"></script>
	  	<script type="text/javascript" src="<?=URL?>assets/js/script.js"></script>
  	</body>
</html>


