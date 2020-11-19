<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item"><a href="#">Usuários</a></li> -->
        <li class="breadcrumb-item active" aria-current="page">Registros de Usuários</li>
    </ol>
</nav>
<?php
if (!empty($usuarios)) :
    // echo '<p> User: '.$usuarios[0]->$usu_nome .'</p>';
    echo '<pre>';
    print_r($usuarios);
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
            foreach ($usuarios as $usuario) :
                extract($usuario);
            ?>
                <tr>
                    <td><?= $usu_nome ?></td>
                    <td><?= $usu_email ?></td>
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