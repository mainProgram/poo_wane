<div class="container jumbotron mt-5">
    <form  action="add-professeurs" method="post" id="form">
        <fieldset>
            <legend class="mt-4"><?=$title?><a href="professeurs" class="text-primary offset-6 text-decoration-none">Liste des professeurs</a></legend>
            <div class="form-group mb-2 offset-1 row">
                <fieldset class="col-10">
                    <label for="prenom" class="col-form-label"> Prénom(s)</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="">
                </fieldset>
            </div>
            <div class="form-group mb-2 offset-1 row">
                <fieldset class="col-10">
                    <label for="nom" class="col-form-label"> Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="">
                </fieldset>
            </div>
            <div class="form-group mb-2 offset-1 row">
                <fieldset class="col-10">
                    <label for="grade" class="form-label">Grade</label>
                    <input type="text" class="form-control" id="grade" name="grade" value="">
                </fieldset>
            </div>
            <div class="form-group mb-2 offset-1 row">
                <fieldset class="col-10">
                    <label for="module" class="col-form-label">Modules</label>
                    <div class="row ms-2">
                        <?php foreach ($modules as $module) { ?>
                            <div class="form-check col" id="module">
                                <input class="form-check-input" type="checkbox" value="<?= $module->id ?>" name="modules[]" >
                                <label class="form-check-label" for="formCheckDefault"><?= $module->nom?></label>
                            </div>
                        <?php } ?>
                    </div>
                </fieldset>
                <fieldset class="col-10">
                    <label for="classe" class="col-form-label">Classes</label>
                    <div class="row ms-2">
                        <?php foreach ($classes as $classe) { ?>
                            <div class="form-check col" id="classe">
                                <input class="form-check-input" type="checkbox" value="<?= $classe->id ?>"  name="classes[]">
                                <label class="form-check-label" for="formCheckDefault"><?= $classe->libelle?></label>
                            </div>
                        <?php } ?>
                    </div>
                </fieldset>
            </div>
            <div class="form-group mt-5 offset-1 row">
                <div class="col-10">
                    <button type="submit" class="btn btn-outline-primary w-100">Ajouter</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>