<?php
/*
Page: connexion.php
*/
//à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
session_start();
//si le bouton "Connexion" est cliqué
if(isset($_POST['connexion'])){
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['login'])){
        echo "the champ Pseudo is empty.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['pwd'])){
            echo " champ Mot de passe is empty.";
        } else {
            // les champs pseudo & mdp sont bien postés et pas vides, on sécurise les données entrées par l'utilisateur
            //le htmlentities() passera les guillemets en entités HTML, ce qui empêchera en partie, les injections SQL
            $Pseudo = htmlentities($_POST['login'], ENT_QUOTES, "UTF-8"); 
            $MotDePasse = htmlentities($_POST['pwd'], ENT_QUOTES, "UTF-8");
            //on se connecte à la base de données:
            $mysqli = mysqli_connect("localhost", "root", "", "educ");
            //on vérifie que la connexion s'effectue correctement:
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                //on fait maintenant la requête dans la base de données pour rechercher si ces données existent et correspondent:
                //si vous avez enregistré le mot de passe en md5() il vous faudra faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                $Requete = mysqli_query($mysqli,"SELECT * FROM users WHERE email = '".$Pseudo."' AND password= '".$MotDePasse."'");
                //si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                //si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) 
                {
                    echo "Thank you for trying to connect your self but your password or email is wrong and is not found in our system please try again later  .";
                } else {
                    //on ouvre la session avec $_SESSION:
                    //la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    $_SESSION['login'] = $Pseudo;
                    echo "welcom to your account !".$Pseudo;

                   foreach ($Requete as $user_info) {
                        if ($Pseudo==$_SESSION['login'] || $idfsseur==$_SESSION['id'] )
                       {
                        
                        
                    
                     $_SESSION['id'] = $user_info['id'];
                     $_SESSION['fname'] = $user_info['fname'];
                     $_SESSION['lname'] = $user_info['lname'];
                     $_SESSION['email'] = $user_info['email'];
                     $_SESSION['file'] = $user_info['file'];
                     header("location:../view/accueil1.php");
                  }   
                 }
}
}
                }
            }
        }
    

// connexion à la base de données:
// on récolt.


                   //echo "welcom to your account !". $id;

                  // $res = $mysqli->query("SELECT *FROM users WHERE email = '".$Pseudo."' ");


    
 //   if($res->num_rows > 0){
     //   $img = $res->fetch_assoc();
        
        //!--Rendre limage
        //header("Content-type: image/png"); 
       // echo $img['file']; 
   // }else{
      //  echo 'Image non trouvée...';
   // }
//}
//}
     //         //  }
       //     }
       // }

// connexion à la base de données:
// on récolte les données contenues dans la table:

?>
<div class="profil" width="10%" height="10%">
</div>
--//