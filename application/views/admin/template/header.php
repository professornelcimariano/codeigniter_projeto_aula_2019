<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Conexão Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url(); ?>public/css/style.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>public/fontawesome/css/all.min.css" />
  <style type="text/css">
    /*Menu*/
    nav {}
    .main-header {height: 40px; width: 80%; float: right; }
    .main-header ul {padding: 5px !important;}
    .main-header ul li {list-style: none; }
    .main-header ul li a {text-decoration: none; color: #fff; margin: 0 5px;}
    .main-sidebar {height: 100%; width: 20%; position: fixed; }
    .main-sidebar ul {padding: 0 !important; }
    .main-sidebar ul li {list-style: none;}
    .main-sidebar ul li icon { color: #fff !important;float: left;}
    .main-sidebar ul li a {text-decoration: none;color: #fff;display: block;
    padding-left: 10px;}
    .main-sidebar ul li ul.sub-menu { display: none;background-color: #2c3b40; 
    padding-left: 10px !important;}
    .main-sidebar .top { width: 100%; height: 40px; float: left; text-align: center; 
    font-weight: bold;padding: 10px; }
    .main-sidebar .top a {color: #fff; text-decoration: none; }
    .main-sidebar .main-menu {}
  </style>
</head>

<body>
  <header>
    <nav class="main-header bkg-one">
      <ul>
        <li class="text-right"><a href="<?= Base_url() ?>/login/logoff">Logoff</a></li>
      </ul>
    </nav>
  </header>

  <aside class="main-sidebar bkg-two">
    <div class="top bkg-one-dark text-white">
      <a href="<?= base_url() ?>admin/dashboard">
      <i class="fas fa-tachometer-alt"></i> Dashboard</a>
    </div>
    <div class="main-menu">
      <span class="text-white">
        <?php
        echo " Olá, " . $this->session->userdata("usu_nome") . "<hr>";
        ?>
      </span>
      <ul>
        <li><a id="menu" class="js_menu" href="#">
            <i class="fas fa-bars"></i> Menu</a>
          </li>
          <hr>
        <li>         
          <a id="usuarios" class="js_menu" href="#">
            <i class="fas fa-user"></i> Usuários</a>
          <ul id="usuarios" class="sub-menu">
            <li><a href="<?= base_url(); ?>admin/Usuarios">Cadastro</a></li>
            <li><a href="<?= base_url(); ?>admin/Usuarios/registros">Registros</a></li>
          </ul>
        </li>
        <li>         
          <a id="funcionarios" class="js_menu" href="#">
            <i class="fas fa-users"></i> Funcionários</a>
          <ul id="funcionarios" class="sub-menu">
            <li><a href="<?= base_url(); ?>admin/Funcionarios">Cadastro</a></li>
            <li><a href="<?= base_url(); ?>admin/Funcionarios/registros">Registros</a></li>
          </ul>
        </li>
        <hr>
        <li>
          <a id="configuracoes" class="js_menu" href="#">
            <i class="fas fa-cog"></i> Configurações</a>
          <ul id="configuracoes" class="sub-menu">
            <li><a href="<?= base_url(); ?>admin/Usuarios">Email</a></li>
            <li><a href="<?= base_url(); ?>admin/Usuarios/registros">Telefone</a></li>
          </ul>
        </li>
        <hr>
      </ul>
    </div>
  </aside>

  <main>