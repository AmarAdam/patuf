   <div class="container">
    <div class="content mt-3">
                <div class="animated fadeIn">
                  <div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="box">
                              <strong>Liste des Terrains</strong>
                          
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nom du terrain</th>
                                    <th scope="col">idTerrain</th>
                                    <th scope="col">Adresse du terrain</th>
                                </tr>
                             </thead>

                          <tbody>
                                <tr>
                                  <?php foreach ($field as $item) { ?>
                                    <td><?php echo $item->namefield; ?></td>
                                    <td><?php echo $item->idfield; ?></td>
                                    <td><?php echo $item->adressefield; ?></td>
                                 </tr>
                                  <?php } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
  

                        <br></br>
                      <br></br>
