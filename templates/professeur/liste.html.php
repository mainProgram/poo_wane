<div class="container jumbotron mt-5">
    <p class="display-4 text-center mb-5"><?= $title ?> <a href="add-professeurs" class="text-primary text-decoration-none">+</a></p>
    <table class="table text-center">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Prénom(s)</th>
                <th scope="col">Nom</th>
                <th scope="col">Grade</th>
                <th scope="col" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($profs as $prof){ ?>
            <tr>
                <td><?= $prof->id ?></td>
                <td><?= $prof->prenom ?></td>
                <td><?= $prof->nom ?></td>
                <td><?= $prof->grade ?></td>
                <td>
                    <!-- <div class="text-center"> -->
                        <a href="/details-prof/<?= $prof->id ?>" class="btn btn-block btn-outline-primary" >détails</a>
                        <a href="/edit-prof/<?= $prof->id ?>" class="btn btn-block btn-outline-warning offset-1">modifier</a>
                        <a href="/delete-prof/<?= $prof->id ?>" class="btn btn-block btn-outline-danger offset-1">supprimer</a>
                    <!-- </div> -->
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>