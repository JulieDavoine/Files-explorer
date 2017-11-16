<?php
	// function what_in_my_file($fichier)
	// {
	// 	strcmp(, )
	// }

	if (isset($_GET['dossier']))
	    $adresse = $_GET['dossier'];   
	else
	    $adresse="./";
	$n = -2; // var a delete dans le futur
	echo "-".$adresse."</br></br>";
	$lalala = getcwd();
	echo $lalala."</br>";
	// echo 'Dossssssssier : '.strstr($lalala, strrchr($lalala, "/"))."</br>"; //test a delete
	// echo 'CWD without useless information : '.strstr($adresse, "")."</br>"; // same here
	echo 'Current work directory : '.strrchr($adresse, "/");



	$dossier = opendir($adresse); 
	echo '<fieldset><legend>Liste des fichiers :</legend><br>'; 
	while ($fichier = readdir($dossier))
	{
	    

echo '<img src="Files-explorer/image2.gif" alt="Texte Alternatif">';



	    if (($fichier != ".") && ($fichier != "..")) 
	        if (is_dir($adresse.'/'.$fichier))
	            echo '<a href="file_explorer.php?dossier='.$adresse.'/'.$fichier.'">'.$n.' - '.$fichier.'</a><br>';
	        else
	            echo '<a href='.$adresse.'/'.$fichier.'>'.$n.' - '.$fichier.'</a><br>';
	}
	closedir($dossier);
	echo '<br></fieldset>';
?>
