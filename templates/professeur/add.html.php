<div class="container-fluid mt-5">
<div class="card  w-25 ">
        <div class="card-body">
            <h4 class="card-title"><?= $title?></h4>
            <p class="card-text ml-3">
                <form action="/professeurs/add" method="post" id="form">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                    </div>
                    <div class="mb-3">
                        <label for="grade" class="form-label">Grade</label>
                        <input type="text" class="form-control" id="grade" name="grade">
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </p>
        </div>
    </div>
</div>