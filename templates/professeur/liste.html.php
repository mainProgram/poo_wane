<div class="container jumbotron mt-5">
    <p class="display-4 text-center mb-5"><?= $title ?></p>
    <table class="table table-bordered table-striped">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Prénom(s)</th>
                <th scope="col">Nom</th>
                <th scope="col">Grade</th>
                <th scope="col" colspan="2">Action</th>
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
                        <button class="btn btn-block btn-outline-warning">modifier</button>
                        <button class="btn btn-block btn-outline-danger">supprimer</button>
                    <!-- </div> -->
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>