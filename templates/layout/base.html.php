<?php
    // use App\Core\Constantes; A eviter
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FZSchool</title>
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT.'bootstrap-5.1.3-dist'.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'bootstrap.css'?>">
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT.'css/style.css'?>">
</head>
<body>
    
<?php if($Session::is_connect()) { ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">FZSchool</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="home">Accueil</a>
        </li>
        <?php if($Session::can_see(["ROLE_RP"])) { ?>
        <li class="nav-item">
          <a class="nav-link text-white" href="users">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="acs">AC</a>
        </li>
        <div class="dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Professeurs</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="professeurs">Liste</a></li>
            <li><a class="dropdown-item" href="add-professeurs">Ajout</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Modules</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="modules">Liste</a></li>
            <li><a class="dropdown-item" href="add-modules">Ajout</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Classes</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="classes">Liste</a></li>
            <li><a class="dropdown-item" href="add-classes">Ajout</a></li>
          </ul>
        </div>
      <?php } ?>

      <?php if($Session::can_see(["ROLE_RP", "ROLE_AC"])){ ?>
        <div class="dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Etudiants</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="etudiants">Liste</a></li>
            <li><a class="dropdown-item" href="inscription">Inscription</a></li>
          </ul>
        </div>
        <li class="nav-item">
          <a class="nav-link text-white" href="demandes">Demandes</a>
        </li>
      <?php } ?>

      <?php if($Session::can_see(["ROLE_ETUDIANT"])) { ?>
        <li class="nav-item">
          <a class="nav-link text-white" href="mesdemandes">Mes demandes</a>
        </li>
      <?php } ?>
      </ul>
        <li class="nav-item d-flex">
          <a class="nav-link text-white" href="logout">Déconnexion</a>
        </li>
    </div>
  </div>
</nav>
<?php } ?>
    <?= $content_for_views ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT.'bootstrap-5.1.3-dist'.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'bootstrap.js'?>">
    <script src="<?=$Constantes::WEB_ROOT.'js/script.js'?>"></script>
</body>
</html>