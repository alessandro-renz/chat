<div class="container">
	<div class="row d-flex justify-content-center" style="height: 40vw;">
		<div class="col-sm-5 align-self-center">
			<div class="login-area">
					<div class="card">
					 	<div class="card-header bg-primary text-light">Login</div>
					 	<div class="card-body bg-light">
					 		<form action="<?=URL?>login/check" method="POST">
					 			<div class="form-group">
					 				<label for="nick">Email ou Nickname:</label>
					 				<input type="text" name="nick" id="nick" class="form-control">
					 			</div>
					 			<div class="form-group">
					 				<label for="password">Senha:</label>
					 				<input type="password" name="password" id="password" class="form-control">
					 			</div>
					 			<button type='submit' class="btn btn-success">Entrar</button>
					 			<a href="<?=URL?>register" class="btn btn-link">Não tenho conta</a>
					 		</form>
					 	</div>
					</div>
			</div>
		</div>
	</div>
			
</div>