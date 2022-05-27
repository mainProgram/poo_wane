<div class="container jumbotron mt-5">
    <p class="display-4 text-center mb-5"><?= $title ?></p>
    <table class="table text-center">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Login</th>
                <th scope="col">Sexe</th>
                <th scope="col">Rôle</th>
                <th scope="col">Matricule</th>
                <th scope="col">Adresse</th>
                <th scope="col" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($users as $user){ ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->prenom ?></td>
                <td><?= $user->nom ?></td>
                <td><?= $user->login ?></td>
                <?php if($user->sexe == 0) : ?>
                    <td><?= "Masculin" ?></td>
                <?php else : ?>
                    <td><?= "Féminin" ?></td>
                <?php endif ?>
                <td><?= $user->role ?></td>
                <td><?= $user->matricule ?></td>
                <td><?= $user->adresse ?></td>
                <td>
                    <button class="btn btn-outline-warning">modifier</button>
                    <button class="btn btn-outline-danger offset-1">supprimer</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>