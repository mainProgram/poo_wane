<div class="container-fluid mt-5">
    <table class="table table bordered">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Login</th>
                <th scope="col">Grade</th>
                <th scope="col">Matricule</th>
                <th scope="col">Adresse</th>
                <th scope="col">Sexe</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($users as $user){ ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->nom ?></td>
                <td><?= $user->prenom ?></td>
                <td><?= $user->login ?></td>
                <td><?= $user->grade ?></td>
                <td><?= $user->matricule ?></td>
                <td><?= $user->adresse ?></td>
                <?php if($user->sexe == 0) : ?>
                    <td><?= "Masculin" ?></td>
                <?php else : ?>
                    <td><?= "Féminin" ?></td>
                <?php endif ?>
                <td>
                    <button class="btn btn-warning">modifier</button>
                    <button class="btn btn-danger">supprimer</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>