
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!--Pulling Awesome Font -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-5">
            <div class="form-login" >
            <h2 class="text-center">Bienvenue sur la page de connexion de PATUF !</h2>
            
            <?php echo form_open('ConnexionCtrl/tentativeconnexion'); ?>

            <form>
                <br></br>
                    <div class="text-center">
                    <h4>Entrez votre Pseudo d'Admin et votre mot de passe :</h4>
                    </div>
                    
                    <br></br>

                    <div class="form-group">
                        <label class="control-label">Pseudo</label>
                        <input type="text" class="form-control" name="pseudoadmin" value="<?php echo set_value('pseudoadmin'); ?>" size="30" required/> 
                            <h6 style="color:red;"</h6>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Mot de passe</label>
                        <input type="password" class="form-control" name="passwordadmin" value="<?php echo set_value('passswordadmin'); ?>" size="30" required/>
                    </div>    
                    
                 
                    
                    <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value=" Connexion " /></div>
                    <div class="text-center">
                        <br>
                        <h1 style="color:darkslategrey; "></h1>
                    </div>
                </form>
            <br></br>
            <br></br>

            <div class="text-center">
            <a class="btn btn-primary" href="<?php echo base_url()?>/VisiteursCtrl/accueil" role="button">Visiteur</a>
            </div>
            

            </div>
        </div>
    </div>
</div>