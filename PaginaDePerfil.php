<?php
include('protect.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel='stylesheet' href="CSS\bootstrap-grid.css">
    <link rel='stylesheet' href="CSS\ClubeLiterarioProjetoFinal.css">
    <link rel='stylesheet' href="CSS\bootstrap copy.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Ahom&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="JavaScript\ClubeLiterarioProjetoFinal.js"></script>
    <script type="text/javascript" src="JavaScript\bootstrap.bundle.min.js" ></script>
    
    <title>Perfil</title>
</head>
<body class="bodyPP">
    <nav class="container">
        <ul class="row">
          <a class="col-mb-4">
            <img class="img-fluid" src="Imagens\LogoSite.png">
          </a>
          <li class="col-sm-2">
            <a class="nav-link" href="Home.php">Home</a>
          </li>
            <li class="col-sm-2">
              <a class="nav-link" href="#">Destaques</a>
            </li>
            <li class="col-sm-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Gêneros
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Romance</a></li>
                <li><a class="dropdown-item" href="#">Ficção centífica</a></li>
                <li><a class="dropdown-item" href="#">Comédia Romântica</a></li>
                <li><a class="dropdown-item" href="#">Biografia</a></li>
                <li><a class="dropdown-item" href="#">Terror</a></li>
                <li><a class="dropdown-item" href="#">Aventura</a></li>
                <li><a class="dropdown-item" href="#">Mistério/Suspense</a></li>

              </ul>
            </li>
            <div class="col-sm-1">
            <button class="btn btn-outline-secondary" type="submit" id="" onclick="openNav2()"><img id="x2" src="Imagens\menu.png"></button>
            </div>
            <hr class="linhaHome">
            <br><br>
            <div id="mySidenav2" class="sidenav">
                <a class="quicksand-regular2" href="javascript:void(0)" class="closebtn" onclick="closeNav2()"><img id="fechar" src="Imagens\fechar.png"></a><br><br>
                <a href="PaginaDePerfil.php"><img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User Avatar"></a><br>
                <p class="quicksand-regular2"><?php echo $_SESSION['nome']; ?></p><br>
                <input class="form-control col-sm-10" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success col-sm-1" type="submit"><img id="BotaoPesquisa" src="Imagens\SearchIcon1.png"></button>
                <a class="quicksand-regular2" href="QuemSomos.html">Quem Somos?</a><br><br>
                <a class="quicksand-regular2" href="#">Minhas Listas</a><br><br>
                <a class="quicksand-regular2" href="#">Avaliações</a><br><br>
                <a class="quicksand-regular2" href="#">Editar Perfil</a><br><br>
                <a class="quicksand-regular2" href="#">Configurações</a><img id="config" src="Imagens\configurações.png"><br><br>
                <a class="quicksand-regular2" href="#">Sair</a><br><br>
            </div>
        <div class="container">
            <div class="HeaderUser">
                <img id="ProfilePic"src="Imagens\profile picture.jpg">
                <div class="linhaV"></div>
            </div><br>
            <ul>
              <h3 id="x17" class="quicksand-regular"><?php echo $_SESSION['nome']; ?></h3>
            <p id="x17" class="quicksand-regular2"><?php echo $_SESSION['nome']; ?></p>
          </ul><br><br>
            <div class="livrosLidos">
            <h4 id="x21" class="quicksand-regular">Livros lidos:</h4>
            <h3 id="x21" class="quicksand-regular2">N</h3><br>
            <h4 id="x21" class="quicksand-regular">Livros na lista:</h4>
            <h3 id="x21" class="quicksand-regular2">n</h3>
          </div>
          
            <h3 id="x17" class="quicksand-regular">Avaliações de (nome):</h3><br>
            <div class="avaliacoes">
            <div class="card" style="width: 20rem;">
            <div class="card-body">
            <h5 class="card-title">Livros:</h5><br>
            <a class="col-sm-2" href="PáginasDeLeituraLivro.html"><img class="img-fluid" id="x6" src="Imagens\NovaImagemTesteLivroParaFicarBonito.jpg" alt="Livro1"></a><br><br>
            <a href="#" class="card-link">Nota</a>
            </div>
            </div>
          </ul>
          <ul>
          <div class="livLista">
            <h3 id="x17" class="quicksand-regular">Livros na lista de (nome):</h3><br>
            <div class="card" style="width: 20rem;">
              <div class="card-body">
                <h5 class="card-title">Livros:</h5><br>
                <a class="col-sm-2" href="PáginasDeLeituraLivro.html"><img class="img-fluid" id="x6" src="Imagens\NovaImagemTesteLivroParaFicarBonito.jpg" alt="Livro1"></a><br><br>
                <a href="#" class="card-link">Nome do livro</a>
              </div>
          </div>  
          </ul>  
         <ul>
          <h3 id="x17"class="quicksand-regular">Continuar lendo:</h3><br>
          <div class="card" style="width: 20rem;">
          <div class="card-body">
            <h5 class="card-title">Livros:</h5><br>
            <a class="col-sm-2" href="PáginasDeLeituraLivro.html"><img class="img-fluid" id="x6" src="Imagens\NovaImagemTesteLivroParaFicarBonito.jpg" alt="Livro1"></a><br><br>
            <a href="PáginasDeLeituraLivro.html" class="card-link">Nome Livro</a>
          </div>
          </ul>
           
           
           
        
      
      </div>
        </div>
    
</body>
</html>