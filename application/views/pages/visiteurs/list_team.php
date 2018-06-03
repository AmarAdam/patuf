     <div class="container">  
            <div class="container">
            <div class="content mt-3">
                <div class="animated fadeIn">

                  <div class="row">
                      <div class="col-md-12">
                          <div class="box">
                              <strong>Liste des Equipes</strong>
                          
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

                    <br></br>
                    <br></br>
                    <br></br>

         

                       
