<?php
  // Démarrer la session PHP
  session_start();
  // Inclus les fichiers de configuration du site
  require_once __DIR__ . '/../config/functions.php';
  require_once __DIR__ . '/../config/config.php';
  require_once __DIR__ . '/../config/database.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MyCar</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><?php echo $siteName; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <?php
          // Gestion du menu dynamique
          $menuItems = [
            ['label' => 'Accueil', 'link' => 'index.php'],
            ['label' => 'Ajouter une voiture', 'link' => 'add_car.php']
          ];
        ?>

                <ul class="navbar-nav mr-auto">
                    <?php foreach ($menuItems as $item) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $item['link']; ?>">
                            <?php echo $item['label']; ?>
                        </a>
                    </li>
                    <?php } ?>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sign-up.php">
                            Inscription
                        </a>
                </ul>
            </div>
        </div>
    </nav>