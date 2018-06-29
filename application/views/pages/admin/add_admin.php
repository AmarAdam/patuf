<?php echo form_open('ConnexionCtrl/createAdmin'); ?>

<div class="container">
    <div id="page-login" class="row">
        <div class="col-xs-8 col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-6">
            <div class="box">
                <div class="box-content">
                   <form>
                    <div class="text-center">
                        <h2 class="page-header">Inscription</h2>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Pseudo de l'Admin</label>
                        <input type="text" class="form-control" name="pseudoadmin" value="<?php echo set_value('pseudoadmin'); ?>" size="30" required/> 
                            <h6 style="color:red;"</h6>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Password de l'Admin</label>
                        <input type="text" class="form-control" name="passwordadmin" value="<?php echo set_value('passwordadmin'); ?>" size="30" required/>
                    </div>
                    
                    <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value=" Inscription " /></div>
                    <div class="text-center">
                        <br>
                        <h1 style="color:darkslategrey; " > Ajoutez ici, les Admins du Site PATUF ! </h1>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br></br>

<?php echo form_open('ConnexionCtrl/deleteAdmin'); ?>

<div class="container">
    <div id="page-login" class="row">
        <div class="col-xs-8 col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-6">
            <div class="box">
                <div class="box-content">
                   <form>
                    <div class="text-center">
                        <h2 class="page-header">Supression</h2>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Pseudo de l'Admin</label>
                        <input type="text" class="form-control" name="pseudoadmin" value="<?php echo set_value('pseudoadmin'); ?>" size="30" required/> 
                            <h6 style="color:red;"</h6>
					</div>
                    
                    <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value=" Supression " /></div>
                    <div class="text-center">
                        <br>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
