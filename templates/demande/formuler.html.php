<div class="container jumbotron mt-5">
<p class="display-6 text-center mb-5"><?= $title ?> </p>
    <a class="btn btn-outline-secondary border rounded-pill w-25 mb-5 text-center" href="mesdemandes">Lister mes demandes</a>
    <div class="row align-items-center justify-content-center">
        <div class="card  w-50 mt-3">
            <div class="card-body">
                <?php
                    if(isset($_SESSION["error"]) && $_SESSION["error"] != "")
                    {
                        echo "<h6 class='alert alert-danger font-italic mt-3' role='alert'>".$_SESSION["error"]."</h6>";
                        unset($_SESSION["error"]);
                    }
                    elseif(isset($_SESSION["success"]) && $_SESSION["success"] != "")
                    {
                        echo "<h6 class='alert alert-success font-italic mt-3' role='alert'>".$_SESSION["success"]."</h6>";
                        unset($_SESSION["success"]);
                    }
                ?>
                <p class="card-text ml-3">
                    <form action="formulerdemande" method="post" id="form">
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="motif">
                                <option selected disabled>Objet</option>
                                <option value="1">Suspension</option>
                                <option value="0">Annulation</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="text_area" class="form-label">Motif</label>
                            <textarea class="form-control" id="text_area" rows="3" name="detail"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Envoyer</button>
                    </form>
                </p>
            </div>
        </div>
    </div>    
</div>

