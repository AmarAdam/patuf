      <div class="container" class="col-xs-8 col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-6">  
        <div class="content mt-3">
                <div class="animated fadeIn">
                  <div>
                  <div class="row">
                      <div>
                          <div class="box" >
                              <strong>Liste des Users</strong>
                          
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nom de l'équipe</th>
                                    <th scope="col">idTeam</th>
                                    <th scope="col">Nombre de joueurs</th>
                                    <th scope="col">id Type Team</th>


                                </tr>
                            </thead>
                          <tbody>
                                <tr>
                                  <?php foreach ($team as $item) { ?>
                                    <td><?php echo $item->nameteam; ?></td>
                                    <td><?php echo $item->idteam; ?></td>
                                    <td><?php echo $item->numbplayer; ?></td>
                                    <td><?php echo $item->id_type_team; ?></td>

                                </tr>
                                  <?php } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          </div>
                        </div>

                       <p> Voulez vous supprimer une équipe ?</p>

                          <?php echo form_open('TeamCtrl/deleteTeam'); ?>

                            <form class="form-inline"  method="post">
                              
                              <div class="form-group">
                                <label class="control-label">Id</label>
                                  <input type="number" class="form-control" name="idteam" value="<?php echo set_value('idteam'); ?>" size="30" required/> </div>
                              <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value="Supression" size="15" /></div>
                            </form>
                        </div>
                      </div>
                    </div>

                    <div class="strong" class="text-center"> Voulez vous modifier une équipe ?</div>

                    <div class="container">

                          <?php echo form_open('TeamCtrl/modifteam'); ?>

                            <form class="form-inline"  method="post">
                                            <div class="text-center"><h2 class="page-header">Modification des Joueurs :</h2></div>

                              <div class="form-group">
                                <label class="control-label">Id de l'Equipe à modifier :</label>
                                  <input type="number" class="form-control" name="idteam" value="<?php echo set_value('idteam'); ?>" size="30" required/> </div>
                                  
                                  <div class="form-group">
                                  <label class="control-label">Nom de l'Equipe</label>
                                  <input type="text" class="form-control" name="nameteam" value="<?php echo set_value('nameteam'); ?>" size="30" required/> 
                                      <h6 style="color:red;"</h6>
                                  </div>
                                    
                              <div class="form-group">
                                  <label class="control-label">Nombre de Joueurs dans l'Equipe</label>
                                  <input type="text" class="form-control" name="numbplayer" value="<?php echo set_value('numbplayer'); ?>" size="30" required/>
                                  
                              </div>
                              
                              <div class="form-group">
                                  <label class="control-label">Id du type de l'Equipe</label>
                                  <input type="text" class="form-control" name="id_type_team" value="<?php echo set_value('id_type_team'); ?>" size="30" required/> 
                              </div>
                              
                              <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value=" Inscription " /></div>
                              <div class="text-center">
                                  <br>
                                  <h1 style="color:darkslategrey; " >Modifiez ici, les Equipes composants sur le Site PATUF ! </h1>
                              </div>
                            </form>
                          </div>
                        


                        </div>
                      </div> 
                    </h6>
                  </div>
                </div>