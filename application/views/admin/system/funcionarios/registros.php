<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item"><a href="#">Usuários</a></li> -->
        <li class="breadcrumb-item active" aria-current="page">Registros de Funcionários</li>
    </ol>
</nav>
<?php
if (!empty($funcionarios)) :
    // echo '<p> User: '.$funcionarios[0]->$usu_nome .'</p>';
    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';
?>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($funcionarios as $funcionario) :
                extract($funcionario);
            ?>
                <tr>
                    <td><?= $fun_nome ?></td>
                    <td><?= $fun_email ?></td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
<?php
else :
    echo 'vazio';
endif;
?>