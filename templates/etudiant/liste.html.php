<div class="container jumbotron mt-5">
<p class="display-4 text-center mb-5"><?= $title ?> <a href="inscription" class="text-primary text-decoration-none">+</a></p>
    <table class="table table bordered">
        <thead> 
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Matricule</th>
                <th scope="col">Prénom(s)</th>
                <th scope="col">Nom</th>
                <th scope="col">Login</th>
                <th scope="col">Adresse</th>
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
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>