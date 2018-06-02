    
<?php echo form_open('UsersCtrl/createUser'); ?>

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
                        <label class="control-label">Pseudo</label>
                        <input type="text" class="form-control" name="pseudouser" value="<?php echo set_value('pseudouser'); ?>" size="30" required/> 
                            <h6 style="color:red;"</h6>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" class="form-control" name="emailuser" value="<?php echo set_value('emailuser'); ?>" size="30" required/>
                        
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Age</label>
                        <input type="text" class="form-control" name="ageuser" value="<?php echo set_value('ageuser'); ?>" size="30" required/> 
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Id Team</label>
                        <input type="idteam" class="form-control" name="idteam" value="<?php echo set_value('idteam'); ?>" size="50" required/>
                    </div> 
                    
                    <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value=" Inscription " /></div>
                    <div class="text-center">
                        <br>
                        <h1 style="color:darkslategrey; " > Ajoutez ici, les utilisateurs du Site PATUF ! </h1>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>