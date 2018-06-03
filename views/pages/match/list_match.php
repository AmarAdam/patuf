
      <div class="container">
          <div class="content mt-3">
                <div class="animated fadeIn">
                  <div>
                  <div class="row">
                      <div class="col-md-12 col-md-offset-2">
                          <div class="box">
                              <strong>Liste des Matchs</strong>
                          
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id du Match</th>
                                    <th scope="col">Id du Terrain</th>
                                    <th scope="col">Id de l'équipe 1</th>
                                    <th scope="col">Id de l'équipe 2</th>
                                    <th scope="col">Date du Match</th>


                                </tr>
                            </thead>
                          <tbody>
                                <tr>
                                  <?php foreach ($match as $item) { ?>
                                    <td><?php echo $item->idmatch; ?></td>
                                    <td><?php echo $item->idfield; ?></td>
                                    <td><?php echo $item->idteam1; ?></td>
                                    <td><?php echo $item->idteam2; ?></td>
                                    <td><?php echo $item->datematch; ?></td>
                                  </tr>
                                  <?php } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          </div>
                        </div>

                       <p> Voulez vous supprimer un Match ?</p>

                          <?php echo form_open('MatchCtrl/deleteMatch'); ?>

                            <form class="form-inline"  method="post">
                              
                              <div class="form-group">
                                <label class="control-label">Id</label>
                                  <input type="number" class="form-control" name="idmatch" value="<?php echo set_value('idmatch'); ?>" size="5" required/> </div>
                              <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value="Supression" size="5" /></div>
                            </form>
                        </div>
                      </div>
                    </div>
                </div>
              </div> 
              

                     