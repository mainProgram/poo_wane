<div class="container jumbotron mt-5">
<p class="display-4 text-center mb-5"><?= $title ?></p>
    <table class="table text-center">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Prénom(s)</th>
                <th scope="col">Nom</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($acs as $ac){ ?>
            <tr>
                <td><?= $ac->id ?></td>
                <td><?= $ac->prenom ?></td>
                <td><?= $ac->nom ?></td>
                <td>
                    <button class="btn btn-outline-primary">détails</button>
                    <button class="btn btn-outline-warning offset-1">modifier</button>
                    <button class="btn btn-outline-danger offset-1">supprimer</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>