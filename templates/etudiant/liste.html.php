<div class="container-fluid mt-5">
    <table class="table table bordered">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Matricule</th>
                <th scope="col">Prénom(s)</th>
                <th scope="col">Nom</th>
                <th scope="col">Login</th>
                <th scope="col">Adresse</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($etudiants as $etudiant){ ?>
            <tr>
                <td><?= $etudiant->id ?></td>
                <td><?= $etudiant->matricule ?></td>
                <td><?= $etudiant->prenom ?></td>
                <td><?= $etudiant->nom ?></td>
                <td><?= $etudiant->login ?></td>
                <td><?= $etudiant->adresse ?></td>
                <td>
                    <button class="btn btn-warning">modifier</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>