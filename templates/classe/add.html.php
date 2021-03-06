<div class="container jumbotron mt-5 ">
    <form action="add-classes" method="post" class=" row align-items-center justify-content-center">
        <fieldset class="col-8">
            <legend class="mt-4"><?=$title?><a href="classes" class="text-primary offset-5 text-decoration-none">Liste des classes</a></legend>
            <div class="form-group mb-4 offset-1 row">
                <fieldset class="col">
                    <label for="libelle" class="col-form-label mt-3">Libellé de la classe</label>
                    <input type="text" class="form-control" id="libelle" name="libelle">
                </fieldset>
            </div>
            <div class="form-group mb-4 offset-1 row">
                <fieldset class="col">
                    <label for="filiere" class="col-form-label">Libellé de la filière</label>
                    <input type="text" class="form-control" id="filiere" name="filiere">
                </fieldset>
            </div>
            <div class="form-group mb-4 offset-1 row">
                <fieldset class="col">
                    <label for="niveau" class="col-form-label">Libellé du niveau</label>
                    <input type="text" class="form-control" id="niveau" name="niveau">
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