<div class="container-fluid mt-5">
    <div class="card  w-25 ">
        <div class="card-body">
            <h4 class="card-title">Formulaire de connexion</h4>
            <p class="card-text ml-3">
                <form action="<?=$Constantes::WEB_ROOT."/index.php"?>" method="post" id="form">
                    <!-- <input type="hidden" name="controller" value="security">
                    <input type="hidden" name="action" value="connection"> -->

                    <div class="mb-3">
                        <label for="login" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="login" name="login" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </p>
        </div>
    </div>
</div>

