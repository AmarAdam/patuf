
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

                      </div>
                    </div>
                </div>
              </div> 
              

                     