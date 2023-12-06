<?php
require_once("db.php");
$userequete = requete("SELECT * FROM utilisateurs");
    if(isset($_POST['login']) && isset($_POST['password'])){
        $username = $_POST['login'];
        $password = md5($_POST['password']);
            for ($i = 0; $i <= count($userequete); $i++) {
                if($username === $userequete[$i]['lc:\wamp64\www\Dicathlon\db.phpogin'] && $password === $userequete[$i]['password']){
                    if($userequete[$i]['role']==='client'){
                        $f= $userequete[$i]['utilisateur_id'];
                        $roleaf= $userequete[$i]['role'];
                        header("Location: accueil.php?iduzer= ".$f."&uzerole=".$roleaf);
                        exit();}

                     else if ($userequete[$i]['role']==='gerant'){
                        $f= $userequete[$i]['utilisateur_id'];
                        $roleaf= $userequete[$i]['role'];
                        header("Location: boutique_admin.php?iduzer= ".$f."&uzerole=".$roleaf);
                        exit();}        
                    else{
                        header("Location: boutique.php?iduzer");
                        exit();
                    }          
                } }
                header("Location: connexion.php");
                echo'<p>mot de passe incorect</p>';
                exit();
}

?>
