<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .rouge {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <h1>FICHIER PHP</h1>
    <?php
        echo "Cette fois ci, mon PHP est <strong>interprété</strong><br>";
        echo "Le resultat de l'addition est " . (75+7) . "<br>";

        $chaine = "c'est le cours de logique";
        /*
        La fonction strlen (strlen = string lenght) renvoie la taille d'une chaine de caractères
        */
        echo " La longueur de la chaine de caractères est " . strlen($chaine);
        echo "<br>";

        $mdp = "azertyuiopqsrrrr";
        // if( strlen($mdp) >= 10 && strlen($mdp) <= 15 ) {
        //     echo "le mot de passe est valide <br>";
        // } else {
        //     echo "le mot de passe est invalide <br>";
        // }
        

        if ( strlen($mdp) >=10) {   
            if ( strlen($mdp) <=15 ){
                if( strlen($mdp) == 12){
                    echo "le mot de passe fait 12 caractères de long<br>";
                } else {
                    echo "le mot de passe est valide";
                }
                
            } else {
                echo "<div class=rouge> le mot de passe est trop long </div>";    
            }
        } else {
            echo "le mot de passe est trop court";
        }

    ?>


    <p>Nouvelle ligne</p>
</body>
</html>