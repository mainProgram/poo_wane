<div class="container jumbotron mt-5">
    <p class="display-4 text-center mb-5"><?= $title ?></p>
    <table class="table text-center">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Libelle</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($annees as $annee){ ?>
            <tr>
                <td><?= $annee->id ?></td>
                <td><?= $annee->libelle ?></td>
                <td>
                    <a href="/details-annee/<?= $annee->id ?>" class="btn btn-block btn-outline-primary" >détails</a>
                    <a href="/edit-annee/<?= $annee->id ?>" class="btn btn-block btn-outline-warning offset-1">modifier</a>
                    <a href="/delete-annee/<?= $annee->id ?>" class="btn btn-block btn-outline-danger offset-1">supprimer</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>