  <div class="container">
    <div class="content mt-3">
                <div class="animated fadeIn">
                  <div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="box">
                              <strong>Liste des Types d'Equipe</strong>
                           <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nom du Type</th>
                                    <th scope="col">idType</th>
                                    </tr>
                            </thead>
                          <tbody>
                                <tr>
                                  <?php foreach ($type as $item) { ?>
                                    <td><?php echo $item->nomtype; ?></td>
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
