<?php
$pdo = new PDO("mysql:host=localhost;dbname=magasin", "root", "");
$req = "SELECT * FROM user";
$results = $pdo->query($req);
$users = $results->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php require 'app/views/header.php'; ?>
    <div class="login-form">
        <form action="" method="post">
            <h2 class="text-center">Se connecter </h2>
            <div class="form-group">
                <label>Pseudo ou e-mail</label>
                <input type="text" name="pseudo_email" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label>Mot de passe </label>
                <input type="password" name="mot_de_passe" class="form-control" required="required">
                <div class="clearfix">
                    <a href="#" class="float-right">Mot de passe oublié?</a>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" name="connecte" class="btn btn-primary btn-block">Se connecter</button>
            </div>
            <div class="clearfix">
                <label class="float-left form-check-label">
                    <input type="checkbox" name="remember" >Se souvenir de moi
                </label>
            </div>
            <?php
            if (isset($error)) {
                echo "<div class='alert alert-danger' role='alert'>" . $error . "</div>";
            }
            ?>
        </form>
        <p class="text-center">Vous n'avez pas de compte?<a href="#">S'inscrire</a></p>
    </div>
</body>
</html>