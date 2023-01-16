<?php 
/*fonction démarrant la page de gestion de l'administrateur*/
function resultatAdmin() { ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--<script src="https://kit.fontawesome.com/8e09982db4.js" crossorigin="anonymous"></script>-->
        <link rel="icon" type="image/x-icon" href="../images/Bachelor.ico" sizes="96x96" />
        <title>Objectif BUT - Administration</title>  
        <script src="../javascript.js"></script>
        <link rel="stylesheet" href="../css/styleResultAdmin.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <meta name="description" content="Page d'administration du jeu Objectif BUT après avoir inséré une question">
    </head>
    <body>
        <header>
            <div class="entete_info">
                <div class="rubrique_menu"><a href="../index.php"><img alt="return" id="return" src="../images/maison.png"></a></div>
                <div class="rubrique_menu"><h1 class="contact_titre">Administrateur</h1></div>
            </div>
        </header>
        <div class="menu">
            <div class="presentation_form">
                <div class="titre_mail">
                    Que voulez-vous faire? :
                </div>

                <div id = "choix">
                    <button id="supprimer" onclick="afficherSupprimer()">Supprimer?</button>

                    <button id="modifier" onclick="afficherModifier()">Modifier?</button>

                    <button id="inserer" onclick="afficherInserer()">Insérer?</button>
                </div>

                <p id = "affichageThemes">Les thèmes possibles sont : General, Programmation, Reseaux, BD, Web et Systeme.</p>

                <form id ="formSupprimer" action="supprimer.php" method="POST">
                        <input id="idQuestion" name="idQuestion" type="text" placeholder="IdQuestion">
                <div class="valide_form">
                        <input type="submit" name="action" value="valider"/>
                </div>
                </form>

                <form id ="formInserer" action="inserer.php" method="POST">
                        <input id="libelle" name="libelle" type="text" placeholder="libelle">
                        <input id="theme" name="theme" type="text" placeholder="theme">
                        <input id="difficulte" name="difficulte" type="text" placeholder="difficulte(1 ou 2)">
                        <input id="indice" name="indice" type="text" placeholder="indice">
                        <input id="explication" name="explication" type="text" placeholder="explication">
                        <input id="reponse1" name="reponse1" type="text" placeholder="reponse 1">
                        <input id="bonneRep1" name="bonneRep1" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse2" name="reponse2" type="text" placeholder="reponse 2">
                        <input id="bonneRep2" name="bonneRep2" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse3" name="reponse3" type="text" placeholder="reponse 3">
                        <input id="bonneRep3" name="bonneRep3" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input id="reponse4" name="reponse4" type="text" placeholder="reponse 4">
                        <input id="bonneRep4" name="bonneRep4" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                <div class="valide_form">
                        <input type="submit" name="action" value="valider"/>
                </div>
                </form>

                <form id ="formModifier" action="modifier.php" method="POST">
                        <input name="id" type="text" placeholder="id">
                        <input name="libelle" type="text" placeholder="libelle">
                        <input name="theme" type="text" placeholder="theme">
                        <input name="difficulte" type="text" placeholder="difficulte(1 ou 2)">
                        <input name="indice" type="text" placeholder="indice">
                        <input name="explication" type="text" placeholder="explication">
                        <input name="reponse1" type="text" placeholder="reponse 1">
                        <input name="bonneRep1" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input name="reponse2" type="text" placeholder="reponse 2">
                        <input name="bonneRep2" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input name="reponse3" type="text" placeholder="reponse 3">
                        <input name="bonneRep3" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                        <input name="reponse4" type="text" placeholder="reponse 4">
                        <input name="bonneRep4" type="text" placeholder="Rep Bonne? (1 bon, 0 mauvais)">
                <div class="valide_form">
                        <input type="submit" name="action" value="valider"/>
                </div>
                </form>

              
            </div>
            <div id="toutesLesQuestions"><?php afficheQuestions();  ?> </div>
        </div>
    </body>
</html>
<?php }?>



<?php
/* fonction permettant à l'administrateur d'ajouter une question */
function AjouteQuestion($Libelle, $Theme, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryId = mysqli_query($dbLink, "SELECT max(ID_QUESTION) From QUESTION; ");
    $IdQuestion = mysqli_fetch_assoc($queryId);
    $IdQuestion = $IdQuestion["max(ID_QUESTION)"] + 1;

    $queryQuestion = mysqli_prepare($dbLink, 'INSERT Into QUESTION Values (?, ?, ?, ?, ?, ?);');
    mysqli_stmt_bind_param($queryQuestion, "ssssss", $IdQuestion, $Libelle, $Theme, $Difficulte, $Indice, $Explication);
    mysqli_execute($queryQuestion);
    mysqli_stmt_close($queryQuestion);

    //On recupere l'id de la question qu'on vient de créer
    $queryIdQuestion = mysqli_prepare($dbLink, 'SELECT ID_QUESTION From QUESTION Where LIBELLE = ?;');
    mysqli_stmt_bind_param($queryIdQuestion, "s", $Libelle);
    mysqli_execute($queryIdQuestion);
    mysqli_stmt_bind_result($queryIdQuestion, $IdQuestion);
    mysqli_stmt_fetch($queryIdQuestion);
    mysqli_stmt_close($queryIdQuestion);

    AjouteReponse($IdQuestion, $Rep1, $Bon1);
    AjouteReponse($IdQuestion, $Rep2, $Bon2);
    AjouteReponse($IdQuestion, $Rep3, $Bon3);
    AjouteReponse($IdQuestion, $Rep4, $Bon4);
}
?>

<?php
/* fonction affichant toutes les questions */
function afficheQuestions() {
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT * FROM QUESTION';
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
                <div class = "question"> 
                    <?php echo $row['LIBELLE'];echo ' : '; ?>
                    <div class = "id_question"> <?php echo $row['ID_QUESTION'];?> </div>
                </div>
                <?php
            }
        } 
    } 
}
?>

<?php /* fonction insérant une des réponses associée à une question */
function AjouteReponse($IdQuestion, $Rep, $BonRep)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryReponse = mysqli_prepare($dbLink, 'INSERT Into REPONSE(ID_QUESTION, BONNE_REP, LIBELLE) Values (?, ?, ?);');
    mysqli_stmt_bind_param($queryReponse, "sss", $IdQuestion, $BonRep, $Rep);
    mysqli_execute($queryReponse);
    mysqli_stmt_close($queryReponse);
}
?>

<?php
/* il faut avoir posté le formulaire d'insertion, même avec des variables vides pour éviter d'arriver sur cette page sans être administrateur*/
if(isset($_POST["libelle"])) {
    $libelle = $_POST["libelle"];
    $theme = $_POST["theme"];
    $difficulte = $_POST["difficulte"];
    $indice = $_POST["indice"];
    $explication = $_POST["explication"];
    $reponse1 = $_POST["reponse1"];
    $bonneRep1 = $_POST["bonneRep1"];
    $reponse2 = $_POST["reponse2"];
    $bonneRep2 = $_POST["bonneRep2"];
    $reponse3 = $_POST["reponse3"];
    $bonneRep3 = $_POST["bonneRep3"];
    $reponse4 = $_POST["reponse4"];
    $bonneRep4 = $_POST["bonneRep4"];
    AjouteQuestion($libelle, $theme, $difficulte, $indice, $explication, $reponse1, $bonneRep1, $reponse2, $bonneRep2, $reponse3, $bonneRep3, $reponse4, $bonneRep4);
    resultatAdmin();
}
?>