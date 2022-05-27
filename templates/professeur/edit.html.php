    <div class="container jumbotron mt-5">
    <form  action="edit-prof" method="post" id="form">
        <fieldset>
            <legend class="mt-4 mb-5"><?=$title?><a href="professeurs" class="text-primary offset-6 text-decoration-none">Liste des professeurs</a></legend>
            <div class="form-group mb-2 offset-1 row">
                <fieldset class="col-3">
                    <label for="prenom" class="form-label"> Prénom(s)</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $infos[0]->prenom ?>">
                </fieldset>
                <fieldset class="col-3">
                    <label for="nom" class="form-label"> Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?= $infos[0]->nom ?>">
                </fieldset>
                <fieldset class="col-3">
                    <label for="grade" class="form-label">Grade</label>
                    <input type="text" class="form-control" id="grade" name="grade" value="<?= $infos[0]->grade ?>">
                </fieldset>
            </div>
            <div class="form-group mb-2 offset-1 row">
                <fieldset class="col-10">
                    <label for="grade" class="form-label">Modules</label>
                    <div class="row ms-2">
                        <?php if(count($modulesProf) > 0){ ?>
                            <?php foreach ($modulesProf as $module) { ?>
                                <div class="form-check col" id="module">
                                    <input class="form-check-input" type="checkbox" value="<?= $module->id ?>" checked >
                                    <label class="form-check-label" for="formCheckDefault"><?= $module->nom?></label>
                                </div>
                            <?php } ?>
                        <?php } else {?>
                            <h4 class="text-danger">Pas de modules !</h4>
                        <?php } ?>
                    </div>                
                </fieldset>
            </div>
            <div class="form-group mb-2 offset-1 row">
                <fieldset class="col-10">
                    <label for="grade" class="form-label">Classes</label>
                    <div class="row ms-2">
                        <?php if(count($classesProf) > 0){ ?>
                            <?php foreach ($classesProf as $classe) { ?>
                                <div class="form-check col" id="classe">
                                    <input class="form-check-input" type="checkbox" value="<?= $classe->id ?>" checked >
                                    <label class="form-check-label" for="formCheckDefault"><?= $classe->libelle?></label>
                                </div>
                            <?php } ?>
                        <?php } else {?>
                            <h4 class="text-danger">Pas de classes !</h4>
                        <?php } ?>
                    </div>                
                </fieldset>
            </div>
            <div class="form-group mb-2 offset-1 row">
                <fieldset class="col-10">
                    <label for="module" class="form-label mt-5 h5">Affecter des Modules</label>
                    <div class="row ms-2 mb-5 ">
                        <?php foreach ($modules as $module) {  
                            if(!in_array($module, $modulesProf)) {
                        ?>
                            <div class="form-check col" id="module">
                                <input class="form-check-input" type="checkbox" value="<?= $module->id ?>" >
                                <label class="form-check-label" for="formCheckDefault"><?= $module->nom?></label>
                            </div>
                        <?php } } ?>
                    </div>
                </fieldset>
                <fieldset class="col-10">
                    <label for="classe" class="form-label h5">Affecter des Classes</label>
                    <div class="row ms-2">
                        <?php foreach ($classes as $classe) {
                          if(!in_array($classe, $classesProf)) {
                            ?>
                            <div class="form-check col" id="classe">
                                <input class="form-check-input" type="checkbox" value="<?= $classe->id ?>" >
                                <label class="form-check-label" for="formCheckDefault"><?= $classe->libelle?></label>
                            </div>
                        <?php } } ?>
                    </div>
                </fieldset>
            </div>
            <div class="form-group mt-5 offset-1 row">
                <div class="col-10">
                    <button type="submit" class="btn btn-outline-primary w-100">Modifier</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>