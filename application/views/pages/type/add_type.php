<?php echo form_open('TypeCtrl/createType'); ?>

<div class="container">
    <div id="page-login" class="row">
        <div class="col-xs-8 col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-6">
            <div class="box">
                <div class="box-content">
                   <form>
                    <div class="text-center">
                        <h2 class="page-header">Ajout de Type d'Equipe !</h2>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Nom du Type d'Equipe</label>
                        <input type="text" class="form-control" name="nomtype" value="<?php echo set_value('nomtype'); ?>" size="30" required/> 
                            <h6 style="color:red;"</h6>
                    </div>
                    
                    <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value=" Inscription " /></div>
                    <div class="text-center">
                        <br>
                        <h1 style="color:darkslategrey; " > Le Foot pour TOUS !</h1>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>