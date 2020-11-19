<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item"><a href="#">Usuários</a></li> -->
        <li class="breadcrumb-item active" aria-current="page">Cadastro de Usuários</li>
    </ol>
</nav>
<?= form_open('admin/Usuarios/cadastrar'); /* Necessário carregar helper('form') */ ?>
<div class="form-group">
    <label for="nome">Nome </label>
    <input class="form-control" type="text" name="usu_nome" />
</div>
<div class="form-group">
    <label for="login">Login </label>
    <input class="form-control" type="text" name="usu_email" />
</div>
<div class="form-group">
    <label for="senha">Palavra passe</label>
    <input class="form-control cep_cep" type="text" name="usu_senha" />
</div>

<button class="btn btn-primary" type="submit"> Cadastrar </button>
<?= form_close(); /* Necessário carregar helper('form') */ ?>
<!-- </form> -->
<br />
<!-- Exibe a mensagem de campos obrigatório -->
<?= validation_errors(); ?>
<hr>
