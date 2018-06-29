<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PATUF</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'/assets/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'/assets/css/simple-sidebar.css';?>" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a href="<?php echo site_url()?>/">Accueil</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    			<ul class="navbar-nav">
      		<li class="nav-item active">
                    <a href="<?php echo site_url()?>/VisiteursCtrl/listuser">Liste des Joueurs</a>
      		</li>
      		<li class="nav-item">
                    <a href="<?php echo site_url()?>/VisiteursCtrl/listteam">Liste des Equipes</a>
      		</li>
      		<li class="nav-item">
                    <a href="<?php echo site_url()?>/VisiteursCtrl/listfield">Liste des Terrains</a>
      		</li>
      		<li class="nav-item">
                    <a href="<?php echo site_url()?>/VisiteursCtrl/listmatch">Liste des Matchs</a>
      		</li>
		<li>
                    <a href="<?php echo base_url()?>/ContactCtrl/contact">Contact</a>
                </li>
    	</ul>
  </div>
</nav>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>PATUF !</h1>
                <p>Bienvenue sur le site web Prêt à Taper un Foot !</p>
                <p><code></code></p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url().'/assets/vendor/jquery/jquery.min.js';?>"></script>
    <script src="<?php echo base_url().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js';?>"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
