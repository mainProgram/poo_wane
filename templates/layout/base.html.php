<?php
    // use App\Core\Constantes; A eviter
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT.'bootstrap-5.1.3-dist'.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'bootstrap.css'?>">
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT.'css/style.css'?>">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
      <form class="d-flex">
        <a href=""><button class="btn btn-outline-success" type="submit">+</button></a>
      </form>
    </div>
  </div>
</nav>  

    <?= $content_for_views ?>

    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT.'bootstrap-5.1.3-dist'.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'bootstrap.js'?>">
    <script src="<?=$Constantes::WEB_ROOT.'js/script.js'?>"></script>
</body>
</html>