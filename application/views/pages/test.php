<body>
        <!-- Left Panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                     
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                 <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">Ajouter un User</div>
                      <div class="card-body card-block">
                        <form action="<?php echo site_url("AccueilCtrl/createUser") ?>" method="post" class="form-horizontal">

                          <input name="pseudouser" type="hidden" <?php if (isset($user)) echo "value = \"" .  $user[0]->pseudouser . "\""?>>

                          <div class="form-group">
                            <label class=" form-control-label">IdUser </label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="iduser" name="iduser" placeholder="IdUser"  class="form-control" <?php if (isset($user)) echo "value = \"" . $user[0]->iduser . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">Pseudo</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="pseudosuer" name="pseudouser" placeholder="Pseudo"  class="form-control" <?php if (isset($user)) echo "value = \"" . $user[0]->pseudouser . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">Age</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="ageuser" name="ageuser" placeholder="ageuser" class="form-control" <?php if (isset($user)) echo "value = \"" . $user[0]->ageuser . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">emailUser</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="emailuser" name="emailuser" placeholder="email user" class="form-control" <?php if (isset($user)) echo "value = \"" . $user[0]->emailuser . "\""?>>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class=" form-control-label">IdTeam</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="idteam" name="idteam" placeholder="id team"  class="form-control" <?php if (isset($user)) echo "value = \"" . $user[0]->idteam . "\""?>>
                            </div>
                          </div>

                          <div class="card-footer ">
                            <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Envoyer
                            </button>

                            <button type="reset" class="btn btn-danger btn-sm">
                              <i class="fa fa-ban"></i> Reset
                            </button>
                          </div>
						</form>


                      </div>
                    </div>
                  </div>

                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->

                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->

