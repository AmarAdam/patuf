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

                  

                        </div>
                      </div> 
                    </h6>
                  </div>
                </div>
