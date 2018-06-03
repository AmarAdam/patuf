<?php echo form_open('FieldCtrl/createField'); ?>

<div class="container">
    <div id="page-login" class="row">
        <div class="col-xs-8 col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-6">
            <div class="box">
                <div class="box-content">
                   <form>
                    <div class="text-center">
                        <h2 class="page-header">Ajout de Terrain !</h2>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Nom du Terrain</label>
                        <input type="text" class="form-control" name="namefield" value="<?php echo set_value('namefield'); ?>" size="30" required/> 
                            <h6 style="color:red;"</h6>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Adresse du Terrain</label>
                        <input type="text" class="form-control" name="adressefield" value="<?php echo set_value('adressefield'); ?>" size="30" required/>
                        
                    </div>
                    
                    <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value=" Inscription " /></div>
                    <div class="text-center">
                        <br>
                        <h1 style="color:darkslategrey; " > Quelle équipe gagnera la PATUF Champion's League ? </h1>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>