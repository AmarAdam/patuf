           <div class="container">
            <div class="content mt-3">
                <div class="animated fadeIn">

                  <div class="row">
                      <div class="col-md-12">
                          <div class="box">
                              <strong>Liste des Users</strong>
                          
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Pseudo</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">idUser</th>
                                    <th scope="col">idTeam</th>
                                </tr>
                            </thead>
                          <tbody>
                                <tr>
                                  <?php foreach ($user as $item) { ?>
                                    <td><?php echo $item->pseudouser; ?></td>
                                    <td><?php echo $item->emailuser; ?></td>
                                    <td><?php echo $item->ageuser; ?></td>
                                    <td><?php echo $item->iduser; ?></td>
                                    <td><?php echo $item->idteam; ?></td>
                                </tr>
                                  <?php } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                        <p> Voulez vous supprimer un joueur ?</p>

                          <?php echo form_open('UsersCtrl/deleteUser'); ?>

                            <form class="form-inline"  method="post">
                            
                            <div class="text-center">                    
                            <h2 class="page-header" class="text-center">Suppression des Joueurs :</h2></div></div>
                            <br></br>

                              <div class="form-group">
                                <label class="control-label">Entrez ici l'identifiant du joueur à supprimer :</label>
                                  <input type="number" class="form-control" name="idteam" value="<?php echo set_value('idteam'); ?>" size="30" required/> </div>
                              <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value="Supression" size="5" /></div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>

                    <br></br>

                    <br></br>



                      <p> Voulez vous modifier un joueur ?</p>

                          <?php echo form_open('UsersCtrl/modifuser'); ?>

                            <form class="form-inline"  method="post">
                                            <div class="text-center"><h2 class="page-header">Modification des Joueurs :</h2></div>

                              <div class="form-group">
                                <label class="control-label">Id du Joueur à modifier :</label>
                                  <input type="number" class="form-control" name="iduser" value="<?php echo set_value('iduser'); ?>" size="30" required/> </div>
                                  <div class="form-group">
                                  <label class="control-label">Pseudo</label>
                                  <input type="text" class="form-control" name="pseudouser" value="<?php echo set_value('pseudouser'); ?>" size="30" required/> 
                                      <h6 style="color:red;"</h6>
                                  </div>
                                    
			                    		<br></br> <br></br>
      
			      
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
                              
                              <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value=" Modification " /></div>
                              <div class="text-center">

                    		<br></br> <br></br>

                                 <h1 style="color:darkslategrey; " >Modifiez ici, les Joueurs inscris sur le Site PATUF ! </h1>
                              </div>
                            </form>
                        </div>
                      </div> 


                    
                    
                    

                        




