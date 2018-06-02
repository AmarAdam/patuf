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

            
                        </div>
                      </div> 


                    
                    
                    

                        




