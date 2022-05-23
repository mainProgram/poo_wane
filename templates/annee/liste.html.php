<div class="container-fluid mt-5">
    <table class="table table bordered">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Libelle</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($annees as $annee){ ?>
            <tr>
                <td><?= $annee->id ?></td>
                <td><?= $annee->libelle ?></td>
                <td>
                    <button class="btn btn-warning">modifier</button>
                    <button class="btn btn-danger">supprimer</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>