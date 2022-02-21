<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
    <title>Inscription P03dev</title>
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- page d'accueille -->
   <p style="text-align:center;font-weight: bold;font-size:25px">Simplon Burkina Faso</p><br />
  
<?php
if(isset($_GET['message'])) {
	echo "<p>".$_GET['message']."</p><br />";
}
?>
            
            <form action="treatment.php" method="POST">
                <h1>Inscription</h1><br />
                
                <label><b>Prénom</b></label>
                <input type="text" placeholder="Entrer le prénom de l'apprenant" name="firstname" id="FIRSTNAME" required>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer le nom de l'apprenant" name="name" id="NAME" required>

<label><b>Adresse E-mail</b></label>
                <input type="email" placeholder="Entrer l'adresse E-mail de l'apprenant" name="email" id="EMAIL" required>

                <label><b>Numéro de téléphone</b></label>
                <input type="tel" placeholder="Entrer le numéro de téléphone de l'apprenant" name="tel" id="TEL" required>

                <input type="submit" name='register' id='REGISTER' value='REGISTER' >              
            </form>			

<p>
<br /><a href="index.php">Retourner à la page d'accueille</a>
</p>

        </div>
    </body>
</html>