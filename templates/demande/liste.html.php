<div class="container jumbotron mt-5">
    <p class="display-4 text-center mb-5"><?= $title ?> </p>
    <?php if($Session::can_see(["ROLE_ETUDIANT"]) && count($demandes) < 1) {?>
    <a class="btn btn-outline-secondary border rounded-pill w-25 mb-4 text-center" href="formulerdemande">+ Formuler une demande</a>
    <?php } ?>
    
    <?php  if(count($demandes) > 0) {  ?>
        <table class="table text-center">
            <thead> 
                <tr>
                    <th scope="col">Motif</th>
                    <th scope="col">Date</th>
                    <th scope="col">Détails</th>
                    <?php if($Session::can_see(["ROLE_AC", "ROLE_RP"])) {?>
                        <th scope="col">Etudiant</th>
                    <?php } ?>
                    <?php if($Session::can_see(["ROLE_ETUDIANT", "ROLE_RP"])) {?>
                        <th scope="col">Traitement</th>
                    <?php } ?>
                    <?php if($Session::can_see(["ROLE_RP"])) {?>
                        <th scope="col" colspan="2">Actions</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody> 
                <?php foreach($demandes as $demande){ ?>
                <tr>
                    <td><?php echo ($demande->motif == 1) ?  "Suspension" :  "Annulation"; ?></td>
                    <td><?= $demande->date ?></td>
                    <td><?= $demande->detail?></td>
                    <?php if($Session::can_see(["ROLE_AC", "ROLE_RP"])) {?>
                        <td><?= $demande->prenom?> <?= $demande->nom?></td>
                    <?php } ?>

                    <?php if($Session::can_see(["ROLE_ETUDIANT", "ROLE_RP"])) {?>
                        <?php if($demande->traitement == 0) { ?>
                            <td class="text-warning">En cours</td>
                        <?php }elseif($demande->traitement == -1) { ?>
                            <td class="text-danger">Refusé</td>
                        <?php }else { ?>
                            <td class="text-success">Accepté</td>
                        <?php } ?>
                    <?php } ?>
                    <?php if($Session::can_see(["ROLE_RP"])) {?>
                        <td>
                            <?php echo ($demande->motif == 1) ? 
                            '<a href="/traiter_demande/'.$demande->id.'" class="btn btn-block btn-outline-warning offset-1">suspension</a>' :
                            '<a href="/traiter_demande/'.$demande->id.'" class="btn btn-block btn-outline-secondary offset-1">annulation</a>'
                            ?>
                            <a href="/refuser_demande/<?= $demande->id ?>" class="btn btn-block btn-outline-danger offset-1">refus</a>
                        </td>
                    <?php } ?>

                </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</div>