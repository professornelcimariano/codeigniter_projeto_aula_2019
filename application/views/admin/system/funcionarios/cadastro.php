<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item"><a href="#">Usuários</a></li> -->
        <li class="breadcrumb-item active" aria-current="page">Cadastro de Funcionários</li>
    </ol>
</nav>
<?= form_open('admin/Funcionarios/cadastrar'); /* Necessário carregar helper('form') */ ?>
<div class="form-group">
    <label for="nome">Nome </label>
    <input class="form-control" type="text" name="fun_nome" />
</div>
<div class="form-group">
    <label for="login">E-mail </label>
    <input class="form-control" type="text" name="fun_email" />
</div>

<button class="btn btn-primary" type="submit"> Cadastrar </button>
<?= form_close(); /* Necessário carregar helper('form') */ ?>
<!-- </form> -->
<br />
<!-- Exibe a mensagem de campos obrigatório -->
<?= validation_errors(); ?>
<hr>
