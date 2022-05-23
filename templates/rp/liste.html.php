<div class="container-fluid mt-5">
    <table class="table table bordered">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Prénom(s)</th>
                <th scope="col">Nom</th>
                <th scope="col">Login</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($rps as $rp){ ?>
            <tr>
                <td><?= $rp->id ?></td>
                <td><?= $rp->prenom ?></td>
                <td><?= $rp->nom ?></td>
                <td><?= $rp->login ?></td>
                <td>
                    <button class="btn btn-warning">modifier</button>
                    <button class="btn btn-danger">supprimer</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>