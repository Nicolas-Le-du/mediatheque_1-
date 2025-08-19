
<?php
include 'header.php';
include 'connexion_pdo.php';

$libelle = $_POST['libelle'];

$req = $monPdo->prepare("INSERT INTO nationalite(libelle) VALUES(:libelle)");
$req->bindParam(':libelle', $libelle);
$nb = $req->execute();
?>

<div class="container mt-5">
    <div class="row">
        <div class="col mt-5">
            <?php if ($nb == 1): ?>
                <div class="alert alert-success" role="alert">
                    La nationalité a bien été ajoutée
                </div>
            <?php else: ?>
                <div class="alert alert-danger" role="alert">
                    La nationalité n'a pas été ajoutée
                </div>
            <?php endif; ?>

            <!-- Bouton de retour -->
            <a href="listeNationalites.php" class="btn btn-primary mt-3">Revenir à la liste des nationalités</a>
        </div>
    </div>
</div>



