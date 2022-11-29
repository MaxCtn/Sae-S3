

<?php function resultatAdmin() { ?>
<!DOCTYPE html>
<html>
    <head>
        <!--<script src="https://kit.fontawesome.com/8e09982db4.js" crossorigin="anonymous"></script>-->
        <title>BackToBachelor - Nous Contacter</title>  
        <script src="../javascript.js"></script>
        <link rel="stylesheet" href="../css/styleResultAdmin.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    </head>
    <body>
        <header>
            <div class="entete_info">
                <div class="rubrique_menu"><a href="../index.php"><img id="return" src="../images/maison.png"></a></div>
                <div class="rubrique_menu"><h1 class="contact_titre">Nous contacter</h1></div>
            </div>
        </header>
        <div class="menu">
            <div class="presentation_form">
                <div class="titre_mail">
                    Que voulez-vous faire? :
                </div>

                <div id = "choix">
                    <button id="supprimer" onclick="afficherSupprimer()">supprimer?</button>
                    <br/>
                    
                    <button id="inserer" onclick="afficherInserer()">Insérer?</button>
                </div>
                <br/>
                <form id ="formSupprimer" action="supprimer.php" method="POST" style="display:none" >
                        <input id="idQuestion" name="idQuestion" type="text" placeholder="IdQuestion">
                <div class="valide_form">
                        <input type="submit" name="action" value="valider"/>
                </div>
                </form>

                <form id ="formInserer" action="inserer.php" method="POST" style="display:none" >
                        <input id="libelle" name="libelle" type="text" placeholder="libelle">





                <div class="valide_form">
                        <input type="submit" name="action" value="valider"/>
                </div>
                </form>

              
            </div>

            <div id="toutesLesQuestions"><?php afficheQuestions();  ?> </div>
        </div>

               
        <div class="menu2">
            <div class="presentation_form">
                <div class="titre_mail">
                    Formulaire :
                </div>
                <div class="info_mail">
                    <div class="nom_prenom">
                        <input id="id" type="text" placeholder="Id">
                        <input id="motDePasse" type="text" placeholder="Mot de Passe">
                    </div>
                </div>
                <div class="valide_form">
                    <button id="valideChoix" onclick="formConfirme()">Valider</button>
                </div>
            </div>
        </div>
    </body>
</html>
<?php } ?>


<?php function startContact() { 
    $action = $_POST['action'];
    $Identifiant = $_POST['id'];
    $Motdepasse = $_POST['motDePasse'];
    if($action == 'valider') 

 { 
    if($Identifiant == 'Patricia' & $Motdepasse == 'motdepasse') {

        resultatAdmin();

        /*$message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
        
        
        $message2 = 'ID : ' . $Identifiant . PHP_EOL;

        $message3 = 'mot de passe : ' . $Motdepasse . PHP_EOL;*/

   // mail($Email, $subject, $message);
    }
    else {
        header("Location: https://quizzbutinfoaix.alwaysdata.net/pages/admin.php");
        exit;

    }

    
 }
}
?>



<?php startContact(); ?>



<?php
function afficheQuestions() {
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT * FROM QUESTION';
    $result = mysqli_query($dbLink, $query);
    if (!$result)
    {
    echo 'Impossible d\'exécuter la requête ', $query, ' : ', mysqli_error($link);
    }
    else
    {
        if (mysqli_num_rows($result) != 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                ?>
                <div id = "question"> 
                    <?php echo $row['LIBELLE'];echo ' : '; ?>
                    <div id = "id_question"> <?php echo $row['ID_QUESTION'];?> </div>
                </div>
                <?php
            }
        } 
    } 
}
?>

<?php
function supprimeQuestion() {
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'INSERT INTO QUESTION';
    $result = mysqli_query($dbLink, $query);
    if (!$result)
    {
    echo 'Impossible d\'exécuter la requête ', $query, ' : ', mysqli_error($dbLink);
    }
    else
    {
        if (mysqli_num_rows($result) != 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                ?>
                <div id = "question"> 
                    <?php echo $row['LIBELLE'];echo ' : '; ?>
                    <div id = "id_question"> <?php echo $row['ID_QUESTION'];?> </div>
                </div>
                <?php
            }
        } 
    } 
}
?>