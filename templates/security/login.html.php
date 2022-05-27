<div class="container-fluid mt-5">
    <div class="row align-items-center justify-content-center">
        <div class="card  w-25 ">
            <div class="card-body">
                <h4 class="card-title">Formulaire de connexion</h4>
                <?php
                    if(isset($_SESSION["error"]) && $_SESSION["error"] != "")
                    {
                        echo "<h6 class='alert alert-danger font-italic mt-3' role='alert'>".$_SESSION["error"]."</h6>";
                        unset($_SESSION["error"]);
                    }
                ?>
                <p class="card-text ml-3">
                    <form action="login" method="post" id="form">
                        <!-- <input type="hidden" name="controller" value="security">
                        <input type="hidden" name="action" value="connection"> -->
    
                        <div class="mb-3">
                            <label for="login" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="login" name="login" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Se connecter</button>
                    </form>
                </p>
            </div>
        </div>
    </div>    
</div>

