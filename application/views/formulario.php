<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulário</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12">
                    <h2> Formulário </h2>
                    <hr>
                    <?php echo validation_errors(); ?>
                    <?= form_open('Formulario/cadastro'); ?>
                    <div class="form-group">
                        <label> Nome </label>
                        <input class="form-control" type="text" name="for_nome" />
                    </div>
                    <div class="form-group">
                        <label> Cidade </label>
                        <input class="form-control" type="text" name="for_cidade" />
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Enviar Dados" />
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
            
            <h3> Dados Cadastrados </h3>
            <?php
            if (!empty($forms)) :
                foreach ($forms as $form) :
                    echo "<p>";
                    echo "<span> <b> Nome: </b> " . $form['for_nome'] . "</span><br/>";
                    echo "<span> <b> Cidade: </b> " . $form['for_cidade'] . "</span>";
                    echo "</p>";
                    echo "<hr>";
                endforeach;
            endif;
            ?>

        </div>
    </div>


</body>

</html>