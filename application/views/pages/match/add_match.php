<?php echo form_open('MatchCtrl/createMatch'); ?>

<div class="container">
    <div id="page-login" class="row">
        <div class="col-xs-8 col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-6">
            <div class="box">
                <div class="box-content">
                   <form>
                    <div class="text-center">
                        <h2 class="page-header">Création d'un Match!</h2>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Id du Terrain</label>
                        <input type="text" class="form-control" name="idfield" value="<?php echo set_value('idfield'); ?>" size="30" required/>
                        
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Id Team 1</label>
                        <input type="text" class="form-control" name="idteam1" value="<?php echo set_value('idteam1'); ?>" size="30" required/> 
                    </div>

                    <div class="form-group">
                        <label class="control-label">Id Team 2</label>
                        <input type="text" class="form-control" name="idteam2" value="<?php echo set_value('idteam2'); ?>" size="30" required/> 
                    </div>
                 
                    <div class="form-group">
                        <label class="control-label">Date du Match</label>
                        <input type="date" class="form-control" name="datematch" min="2018-06-29" value="<?php echo set_value('datematch'); ?>" size="30" required/> 
                    </div>
                 
                    <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value=" Création d'un Match " /></div>
                    <div class="text-center">
                        <br>
                        <h1 style="color:darkslategrey; " > CE SOIR, C'EEEEEEEEEST MATCH ! </h1>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
