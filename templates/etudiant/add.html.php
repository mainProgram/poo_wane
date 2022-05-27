<div class="container jumbotron mt-5">
    <form action="inscription" method="post">
        <fieldset>
            <legend class="mt-4"><?=$title?><a href="etudiants" class="text-primary offset-6 text-decoration-none">Liste des étudiants</a></legend>
            <div class="form-group mb-4 offset-1 row">
                <fieldset class="col-6">
                    <label for="prenom" class="col-form-label"> Prénom(s)</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </fieldset>
                <fieldset class="col-6">
                    <label for="nom" class="col-form-label"> Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </fieldset>
            </div>
            <div class="form-group mb-4 offset-1 row">
                <fieldset class="col-6">
                    <label for="login" class="col-form-label"> E-mail</label>
                    <input type="text" class="form-control" id="login" name="login">
                </fieldset>
                <fieldset class="col-6">
                    <label for="adresse" class="col-form-label"> Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse">
                </fieldset>
            </div>
            <div class="form-group mb-4 offset-1 row">
                <fieldset class="col-6">
                    <label for="sexe" class="col-form-label"> Sexe</label>
                    <select name="sexe" id="sexe" class="form-select">
                        <option value="0" selected>Masculin</option>
                        <option value="1">Féminin</option>
                    </select>
                </fieldset>
                <fieldset class="col-6">
                    <label for="classe" class="col-form-label">Classe</label>
                    <select name="classe" id="classe" class="form-select">
                        <?php foreach ($classes as $classe) { ?>
                            <option value="<?= $classe->id ?>" ><?= $classe->libelle?></option>
                        <?php } ?>
                    </select>
                </fieldset>
            </div>
            <div class="form-group mt-5 offset-1 row">
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-primary w-100">Inscrire</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>