<div class="container-fluid mt-5">
    <table class="table table bordered">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($modules as $module){ ?>
            <tr>
                <td><?= $module->id ?></td>
                <td><?= $module->nom ?></td>
                <td>
                    <button class="btn btn-warning">modifier</button>
                    <button class="btn btn-danger">supprimer</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>