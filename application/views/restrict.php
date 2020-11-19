<?php  //echo MD5("123") 
?>
<style type="text/css">
	/* Mobile First */
	.restrict-body {width: 100%;float: left;min-height: 800px;
		background-image: url("<?php echo base_url(); ?>public/images/bkg-login.jpg");
		position: center center;background-size: cover;	}
	.bl-login {padding: 2%;	min-height: 100px;margin-top: 100px;
		background-color: rgba(0, 0, 0, 0.7);}
	.bl-login h3 {color: #fff;text-align: center;}
	.bl-login label {color: #fff;}
	@media(min-width: 1024px) {
		.bl-login {	margin-top: 150px;}
	}
</style>
<div class="restrict-body">
	<div class="container">
		<div class="bl-login">
			<h3>Bem vindo :) </h3>
			<!-- <form name="login" action="Login/formLogin" method="post"> -->
			<?= form_open('Login/formLogin'); /* Necessário carregar helper('form') */ ?>
			<div class="form-group">
				<label for="login">Login </label>
				<input class="form-control" type="text" name="usu_email" />
			</div>
			<div class="form-group">
				<label for="senha">Palavra passe</label>
				<input class="form-control cep_cep" type="text" name="usu_senha" />
			</div>

			<input class="btn btn-primary btn-lg btn-block" type="submit" value="Efetuar Login"/>
			<?= form_close(); /* Necessário carregar helper('form') */ ?>
			<!-- </form> -->
			<h6 style="color: #fff !important">
			<!-- Exibe a mensagem de campos obrigatório -->
				<?= validation_errors(); ?>
			</h6>
		</div>
	</div>
</div>