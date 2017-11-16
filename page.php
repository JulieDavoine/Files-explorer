<?php
$adresse="Test/Images/"; //Adresse du dossier sans oublier le / à la fin.
$dossier=Opendir($adresse); //Ouverture du dossier.

while ($Fichier = readdir($dossier)) //On affiche les fichiers les uns après les autres.
{
    if ($Fichier != "." && $Fichier != "..") 
    {
        echo '<a href='.$adresse.$Fichier.' target="_blank">'.$Fichier.'</a><br>';
    } 
     //Maintenant, on affiche les fichiers sous forme de liens vers les fichiers 
     //(NB : Les lien sont en target="_blank" ce qui signifie qu'ils ouvrirons une nouvelle page dans votre navigateur !).
    
}
closedir($dossier);



?> 