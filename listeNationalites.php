<?php
include 'header.php';
?>

<?php
include 'connexion_pdo.php';
$req = $monPdo->prepare("SELECT  * FROM nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites = $req->fetchAll();
?>





<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-9">
            <h2>Liste des nationalités</h2>
        </div>
        <div class="col-3 mb-3"><a href="#" class="btn btn-success">Créer une nationalité</a></div>
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr class='d-flex'>
                <th scope="col" class='col-md-3'>#</th>
                <th scope="col" class='col-md-6'>libellé</th>
                <th scope="col" class='col-md-3'>Action</th>

            </tr>
        </thead>
        <tbody>
            <?Php
            foreach ($lesNationalites as $nationalite) {
                echo "<tr class='d-flex'>";
                echo "<td class='col-md-3'>$nationalite->num</td>";
                echo "<td class='col-md-6'>$nationalite->libelle</td>";
                echo "<td class='col-md-3'>
                        <a href='#' class='btn btn-primary'><i class='fa-solid fa-plus'></i></a>
                        <a href='#' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></a>
                      </td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
</div>



<?php
include 'footer.php';
?>