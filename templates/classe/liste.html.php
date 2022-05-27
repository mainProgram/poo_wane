<div class="container jumbotron mt-5">
    <p class="display-4 text-center mb-5"><?= $title ?> <a href="add-classes" class="text-primary text-decoration-none">+</a></p>
    <table class="table text-center">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Libelle</th>
                <th scope="col">Filiere</th>
                <th scope="col">Niveau</th>
                <th scope="col" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($classes as $classe){ ?>
            <tr>
                <td><?= $classe->id ?></td>
                <td><?= $classe->libelle ?></td>
                <td><?= $classe->filiere ?></td>
                <td><?= $classe->niveau ?></td>
                <td>
                    <button class="btn btn-outline-warning">modifier</button>
                    <button class="btn btn-outline-danger offset-1">supprimer</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>