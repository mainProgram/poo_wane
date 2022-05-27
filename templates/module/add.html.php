<div class="container jumbotron mt-5">
    <form action="add-modules" method="post" >
        <fieldset>
            <legend class="mt-4"><?=$title?><a href="modules" class="text-primary offset-5 text-decoration-none">Liste des modules</a></legend>
            <div class="form-group mb-4 offset-1 row">
                <fieldset class="col">
                    <label for="nom" class="col-form-label">Libellé du module</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </fieldset>
            </div>
            <div class="form-group mt-5 offset-1 row">
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-primary w-100">Ajouter</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>