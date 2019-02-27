<?php

// On inclus le fichier header.php sur la page
require_once __DIR__ . '/../partials/header.php'; ?>

<!-- Page Content -->
<div class="container">

    <div class="row font-weight-bold my-5 border-top">
        <div class="col-1 my-3">#</div>
        <div class="col-3 my-3">Photo</div>
        <div class="col-2 my-3">Marque</div>
        <div class="col-1 my-3">Modèle</div>
        <div class="col-2 my-3">Prix</div>
        <div class="col-2 my-3">Année de sortie</div>
        <div class="col-1 my-3">Action</div>
    </div>
    <?php 
          $query = $db->query('SELECT * FROM car');
          $cars = $query->fetchAll();
        ?>
    <?php foreach ($cars as $car) { ?>
    <div class="row border-top border-dark">
        <div class="col-1 my-4"><?= $car['id'] ?></div>
        <div class="col-3 my-4"><img class="card-img-top" src="assets/img/<?= $car['photo']; ?>"
                alt="<?= $car['model']; ?>"></div>
        <div class="col-2 my-4"><?= $car['brand'] ?></div>
        <div class="col-1 my-4"><?= $car['model'] ?></div>
        <div class="col-2 my-4"><?= number_format($car['price'], 2, ",", " ") ?> €</div>
        <div class="col-2 my-4"><?= $car['release_date'] ?></div>
        <div class="col-1 my-4">
            <p>
                <div class="row">
                    <div class="col-6"><button type="button" class="btn btn-primary" href="#"><i
                                class="fas fa-pencil-alt"></i></button></div>
                    <div class="col-6"><button type="button" class="btn btn-danger" href="#"><i
                                class="far fa-trash-alt"></i></button></div>
                </div>

        </div>


    </div>
    <?php } ?>


</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

<?php require_once __DIR__ . '/../partials/footer.php';