<!DOCTYPE html>
<html>
<head>
	<title>Save mofification du magasin</title>
</head>
<body>
<?php

$dossier= 'C:xampp/htdocs/sun/img/';
$fichier= basename ($file['file'] ['name']);

$taille_maxi = 52428800;
//$taille= filesize($file['file']['tmp_name']);

$extensions = array('.png', '.gif','.jfif', 
'.jpg', '.jpeg');
$extension = strrchr($file(['file']['name'], '.'));

if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur= 'Vous devez uploader un fichier de type png, gif, jfif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur= 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier= strtr($fichier,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
$fichier= preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
if(move_uploaded_file($file ['icone']['tmp_name'], $dossier . $fichier) AND move_uploaded_file($file ['image1']['tmp_name'], $dossier . $image1) )  //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
{
  require_once '../modele/connect_bd.php';
              //Insertion du messqge à l'aide d'une requête préparée
          $req=$bdd->prepare('INSERT INTO users (file) VALUES(?)') ;
  
// Evidemment il faut mettre un WHERE .. = .. (car l'image est forcément liée à un utilisateur?)
$req->execute(array
($fichier,$image1,));
  
    header('Location: ../Login_v15/log.php');

          $req->closeCursor();
     }
     else //Sinon (la fonction renvoie FALSE).
    {
          echo 'Echec de l\'upload !';
	}
}
else
{
     echo $erreur;
}
?>

</body>
</html>