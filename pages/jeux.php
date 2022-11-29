<?php function trouveQuestion($ID_QUESTION) {
  $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
  mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

 
// créer une requête préparée
if ($stmt = mysqli_prepare($dbLink, "SELECT LIBELLE FROM QUESTION WHERE ID_QUESTION > ?")) {
    // associer la variable à la requête
    mysqli_stmt_bind_param($stmt, "i", $ID_QUESTION);
    // exécuter la requête
    mysqli_stmt_execute($stmt);
    // associer la colonne du jeu de résultats à une variable
    mysqli_stmt_bind_result($stmt, $LIBELLE);
    // récupérer la valeur
    mysqli_stmt_fetch($stmt);
    return $LIBELLE;
    mysqli_stmt_close($stmt);
}}
 ?>

<?php function trouveReponse($ID_QUESTION) {
  $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
  mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

 
// créer une requête préparée
if ($stmt = mysqli_prepare($dbLink, "SELECT LIBELLE FROM REPONSE WHERE ID_REP > ?")) {
    // associer la variable à la requête
    mysqli_stmt_bind_param($stmt, "i", $ID_QUESTION);
    // exécuter la requête
    mysqli_stmt_execute($stmt);


    // associer la colonne du jeu de résultats à une variable
    mysqli_stmt_bind_result($stmt, $LIBELLE);
    // récupérer la valeur
    mysqli_stmt_fetch($stmt);
    return $LIBELLE;


    mysqli_stmt_close($stmt);
}}
 ?>

<?php function startJeux() { ?>
    <!DOCTYPE html>
<html>
    <head>
        <title>BackToBachelor - Jeux</title>  
        <script src="../javascript.js"></script>
        <link rel="stylesheet" href="../css/styleJeux.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="affichage">
            <div class="affichage_gauche">
                <div class="carte">
                    <img src="../images/plan.png">
                </div>
                <div class="bot">

                </div>
            </div>
            <div class="affichage_droite">
                <div class="entete">
                    <div class="num_question">
                        <h3 id ="num">0</h3>
                    </div>
                    <header>
                        <h1 class="titre">Nom</h1>
                        <h1>du jeux</h1>
                    </header>
                </div>
                <div class="corps_question">
                    <div class="question">
                        <h2 id="questionPosee"><?php  echo 'clic sur oui';// trouveQuestion(0); ?></h2>
                    </div>
                    <div class="reponse">
                        <div class="reponseLigne">
                            <?php $nombre =0; ?>
                            
                            <button id="rep1" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionne(this.id)">non</button>
                            
                            <button id="rep2" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionne(this.id)">non</button>
                        </div>
                        <div class="reponseLigne">
                            <button id="rep3" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionne(this.id)">oui</button>
                            <button id="rep4" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionne(this.id)">non</button>
                        </div>
                    </div>
                    <div class="soumettre">
                        
                        <button id="soumettre" onclick="cliqueValiderOuContinuer(this.id)">Valider</button>
                    </div>

                   <!--- <button id="test" onclick="ouvrirFermerBot()">indice </button> --->


                    



                    <div id="boiteCarteAideBot">
            <div>
                <!--<img id="AHA" src="image/bizarre.png"> --->
            </div>
            <div id="aideBot">
                <div id="barreNavBot">
                    <p id="titreBot">Help Bot</p>
                    <p id="tempsRestant"></p>
                   <!--- <button id="ouvrirBot" onclick = "ouvrirBot()"> --->
                    <img id="logoBouttonBotHaut" class="logoBouttonBot" src="../images/bot.png"  onclick = "ouvrirBot()">
                    <!-- <button id="fermerBot" onclick = "fermerBot()"> --->
                    <img id="logoBouttonBotBas" class="logoBouttonBot" src="../images/flechehaut.png" 
                    onclick = "fermerBot()"></button>
            
                </div>
                <div id="chatBot">
                
                </div>
            </div>
        </div>


                </div>
            </div>
        </div>
    </body>
</html>
<?php } ?>


<?php startJeux(); ?>