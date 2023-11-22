<?php

if(isset($_GET["delete"]) && $_GET["delete"] != ""){
    $controller->delete(intval($_GET["delete"]));
}
$all_produits = $controller->model->findAll();
?>

<?php require 'app\views\header.php'; ?>

<main>
    <div class="container-xl">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2> Gestion des <b>produits</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                        <div>
                            <form action="" method="get">
                            <input type="submit" name="ajout" value="Ajouter">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Designation </th>
                        <th>Catégorie</th>
                        <th>Quantité de stock</th>
                        <th>Prix Unitaire</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($all_produits as $key=>$p) {
                        echo "<tr>";
                        echo "<td>" . $p['id'] . "</td>";
                        echo "<td>" . $p['name'] . "</td>";
                        echo "<td>" . $p['category_name'] . "</td>";
                        echo "<td>" . $p['qty_stock'] . "</td>";
                        echo "<td>" . $p['price'] . "</td>";
                        echo "<td><img src='" . $p['image'] . "' alt='Image du produit' style='width: 100px;'></td>";
                        echo "<td>";
                        echo "<a href='#' class='view' title='View' data-toggle='tooltip'><i class='material-icons'>&#xE417;</i></a>";
                        echo "<a href='update.php' class='edit' title='Edit' name ='edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>";
                        echo "<a href='?delete=" . $p['id'] . "' class='delete' name='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php require 'app\views\footer.php'; ?>
