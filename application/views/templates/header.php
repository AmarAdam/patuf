<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title class="text-align-center">PATUF</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'/assets/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'/assets/css/simple-sidebar.css';?>" rel="stylesheet">

</head>

<body>
	
	<div id="page-content-wrapper">
            <div class="container-fluid">
                <h1 class="text-align-center">PATUF !</h1>
                <p>Bienvenue sur le site web Prêt à Taper un Foot !</p>
                <p><code></code></p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
            </div>
        </div>	
	
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                   
                </li>
                <li>
                    <a href="<?php echo base_url()?>/">Accueil</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/UsersCtrl/listuser">Liste des Joueurs</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/UsersCtrl/adduser">Ajouter un Joueur</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/TeamCtrl/listteam">Liste des Equipes</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/TeamCtrl/addteam">Ajouter une Equipe</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/FieldCtrl/listfield">Liste des Terrains</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/FieldCtrl/addfield">Ajouter un Terrain</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/TypeCtrl/listtype">Liste des Types d'Equipe</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/TypeCtrl/addtype">Ajouter un Type d'Equipe</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/MatchCtrl/listmatch">Liste des Matchs</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/MatchCtrl/addmatch">Créer un Match</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/ConnexionCtrl/addadmin">Ajouter/Supprimer des Admin</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/DeconnexionCtrl/deconnexion">Déconnexion</a>
                </li>
		<li>
                    <a href="<?php echo base_url()?>/ContactCtrl/contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
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


   
