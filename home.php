<?php
  require_once "validator.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>Ateliê Aline Nacur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
</head>
<body>
    <div class="container" style="background-color: pink;">
        <div class="row">
            <div class="col-sm">
                <img src="Atelie_Aline21.png" height="100" width="100" alt="Logo">
            </div>
            <div class="col-sm">
                <nav class="navbar">
                    <form class="form-inline mt-5" style="display: flex; position: relative; top: -25px;">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    </form>
                </nav>
            </div>
            <div class="col-sm" style="display: flex; position: relative; top: 32px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <img src="coracao.png" width="30" height="30" alt="Coração">
                        </div>
                        <div class="col-sm">
                            <img src="carrinho.png" width="30" height="30" alt="Carrinho">
                        </div>
                        <div class="col-sm">
                            <img src="menu.png" width="30" height="30" alt="Menu">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">
            SAIR
          </a>
        </li>
      </ul>

    <div class="container">    
      <div class="row">
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <img src="formulario_abrir_chamado.png" width="70" height="70" alt="Abrir Chamado">
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <img src="formulario_consultar_chamado.png" width="70" height="70" alt="Consultar Chamado">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php 
include 'rodape.html';
?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
