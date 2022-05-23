<div class="container-fluid mt-5">
    <table class="table table bordered">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Libelle</th>
                <th scope="col">Filiere</th>
                <th scope="col">Niveau</th>
                <th scope="col">Action</th>
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
                    <button class="btn btn-warning">modifier</button>
                    <button class="btn btn-danger">supprimer</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>