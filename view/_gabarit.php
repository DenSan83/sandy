<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Mes Devinettes</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <title></title>
</head>
<body>
  <header>
    <nav>
      <div class="nav-item">
        <a href="#">
          <i class="material-icons">camera_alt</i>
          <h1>Devinettes</h1>
        </a>
        <h1 style="..."></h1>
      </div>
      <div class="nav-item">
        <input id="input-search" type="text" placeholder="Rechercher" />
      </div>
      <div class="nav-item end-row">
        <button>
          <a href="<?php echo HOST; ?>create-devinette.html">
            Ajouter une devinette
          </a>
        </button>
        <a href="#">
          <i class="material-icons">star_border</i>
        </a>
        <a href="#">
          <i class="material-icons">person_outline</i>
        </a>
      </div>
    </nav>
  </header>

<!--- ma page -->
<?php echo $contentPage; ?>

</body>
</html>
