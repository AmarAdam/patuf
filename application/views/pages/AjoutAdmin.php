<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/materialize/css/materialize.css" type="text/css" media="screen,projection"/>
    <script type = "text/javascript"
            src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
</head>
<body>
<?php include('layout/header.php'); ?>
<form action=<?php echo site_url('connexion/tentativeAjouterMembre'); ?> method="post" target="_self">
    Login : <input type="text" name="login"><br>
    Mot de passe : <input type="password" name="password"><br>
    <input type="submit" value="Valider">
</form>

</body>
</html>