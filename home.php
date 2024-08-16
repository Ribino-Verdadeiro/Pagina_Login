<?php
  require_once "validator.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="utf-8" />
    <title>Ateliê Aline Nacur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href='style.css'>

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }

      .cabecalho, .conteinera{
        width: 100%;
        background-color: pink;
        background-size: cover;
      }

      #botao{
        background-color: pink;
        border-color: white;
      }

      #botao:hover{
        background-color: pink;
        border-color: white;
        opacity: 0.5;
      }

      #sair{
        text-align: center;
      }
    </style>

</head>

<body>

<?php include 'cabecalho.php'; ?>
   
  <div id="sair">    
    <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">
            SAIR
          </a>
        </li>
    </ul>
  </div>
      

<?php include 'rodape.html'; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
