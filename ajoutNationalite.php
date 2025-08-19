<?php
include 'header.php';
?>
<div class="container mt-5 mb-5">
    <h2 class="pt-3 text-center">Ajouter une nationalité</h2>

    <form action="validationNationalite.php" method="post" class="col-md-6 offset-md-3 border border-primary p-3 rounded ">
        <div class="form-group">
            <label for="libelle">Libellé</label>
            <input type="text" name="libelle" id="libelle" placeholder="Saisissez le libellé" class="form-control">
        </div>
        <div class="row mt-3">
            <div class="col"><a href="listeNationalites.php" class='btn btn-warning w-100'>Revenir à la liste</a></div>
            <div class="col"><button type="submit" class='btn btn-success w-100'>Ajouter</button></div>
        </div>
    </form>
</div>
<?php
include 'footer.php';
?>