<div class="container jumbotron mt-5">
    <p class="display-4 text-center mb-5"><?= $title ?> <a href="add-modules" class="text-primary text-decoration-none">+</a></p>
    <table class="table text-center">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nom</th>
                <th scope="col" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($modules as $module){ ?>
            <tr>
                <td><?= $module->id ?></td>
                <td><?= $module->nom ?></td>
                <td>
                    <button class="btn btn-outline-warning">modifier</button>
                    <button class="btn btn-outline-danger offset-1">supprimer</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>