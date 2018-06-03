s<!DOCTYPE html>
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

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url()?>/">Accueil</a>
                </li>
                <li>
                    <a href="<?php echo site_url()?>/visiteursctrl/listuser">Liste des Joueurs</a>
                </li>
                
                <li>
                    <a href="<?php echo site_url()?>/visiteursctrl/listteam">Liste des Equipes</a>
                </li>
            
                <li>
                    <a href="<?php echo site_url()?>/visiteursctrl/listfield">Liste des Terrains</a>
                </li>
                
                <li>
                    <a href="<?php echo site_url()?>/visiteursctrl/listtype">Liste des Types d'Equipe</a>
                </li>
                
                <li>
                    <a href="<?php echo site_url()?>/visiteursctrl/listmatch">Liste des Matchs</a>
                </li>
               
                
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

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
