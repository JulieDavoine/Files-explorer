<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Files-explorer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-2"><img src="logo.png" alt=""></div>
                <div class="col-10"><h1>Projet Files Explorer fait au sein de l'Access Code School</h1></div>
            </div>
        </div>
        
        <div class="container">
            <input type="text" name="search" placeholder="Search.."> 
        </div>
    </header>
    <div id="main" class="container">
        <div class="row">
                <div class="col-4 categories">
                <?php
                $adresse="./Test/"; //Adresse du dossier sans oublier le / à la fin.
                $dossier=Opendir($adresse); //Ouverture du dossier.
                
                while ($Fichier = readdir($dossier)) //On affiche les fichiers les uns après les autres.
                {
                    if ($Fichier != "." && $Fichier != "..") 
                    {
                        echo "<a class='lien' href='.$adresse.$Fichier.' target='_blank'>'.$Fichier.'</a><br>'";
                    } 
                     //Maintenant, on affiche les fichiers sous forme de liens vers les fichiers 
                     //(NB : Les lien sont en target="_blank" ce qui signifie qu'ils ouvrirons une nouvelle page dans votre navigateur !).
                    
                }
                closedir($dossier);
                ?> 
                </div>
                <div class="col-8 dossier"><h2>Dossier/Fichier</h2></div>
        </div>
    </div>
    
    <footer>
        <div class="container">
                <h2>FOOTER</h2>
        </div>

       
    </footer>
</body>
</html>