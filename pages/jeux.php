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
        <link rel="stylesheet" href="../css/stylePlan.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="affichage">
            <div class="affichage_gauche">
            <div id = "plan">
                    <a id = "lienFreepik" href="http://www.freepik.com">Designed by rawpixel.com / Freepik</a>
                    <!--2e étage-->
                    <table>
                        <tr>
                            <th class="classes" scope="section7" id="case_2E_2_1" colspan="3"></th>
                            <th class="classes" scope="section8" id="case_2E_2_2" colspan="2"></th>
                            <th class="classes" scope="section8" id="case_2E_2_3" colspan="2"></th>
                            <th class="classes" scope="section9" id="case_2E_2_4" colspan="2"></th>
                            <th class="classes"                  id="case_2E_2_5"></th>
                        </tr>
                        <tr>
                            <th colspan="10" class="couloir" id="couloir2E"></th>
                        </tr>
                        <tr>
                            <th class="classes" scope="section7" id="case_2E_1_1"></th>
                            <th class="classes" scope="section7" id="case_2E_1_2"></th>
                            <th class="classes" scope="section7" id="case_2E_1_3"></th>
                            <th class="classes" scope="section8" id="case_2E_1_4"></th>
                            <th class="classes" scope="section8" id="case_2E_1_5"></th>
                            <th class="classes" scope="section8" id="case_2E_1_6"></th>
                            <th class="classes" scope="section9" id="case_2E_1_7"></th>
                            <th class="classes" scope="section9" id="case_2E_1_8"></th>
                            <th class="classes" scope="section9" id="case_2E_1_9"></th>
                            <th class="classes" scope="section9" id="case_2E_1_10"></th>
                        </tr>
                    </table>

                    <!--1er étage-->
                    <table>
                        <tr>
                            <th class="classes" scope="section6" id="case_1E_2_1" colspan="2"></th>
                            <th class="classes" scope="section5" id="case_1E_2_2" colspan="2"></th>
                            <th class="classes" scope="section5" id="case_1E_2_3" colspan="2"></th>
                            <th class="classes" scope="section4" id="case_1E_2_4" colspan="2"></th>
                            <th class="classes" scope="section4" id="case_1E_2_5"></th>
                        </tr>
                        <tr>
                            <th colspan="10" class="couloir" id="couloir1E"></th>
                        </tr>
                        <tr>
                            <th class="classes" scope="section6" id="case_1E_1_1"></th>
                            <th class="classes" scope="section6" id="case_1E_1_2"></th>
                            <th class="classes" scope="section6" id="case_1E_1_3"></th>
                            <th class="classes" scope="section5" id="case_1E_1_4"></th>
                            <th class="classes" scope="section5" id="case_1E_1_5"></th>
                            <th class="classes" scope="section5" id="case_1E_1_6"></th>
                            <th class="classes" scope="section5" id="case_1E_1_7"></th>
                            <th class="classes" scope="section4" id="case_1E_1_8"></th>
                            <th class="classes" scope="section4" id="case_1E_1_9"></th>
                        </tr>
                    </table>
                    
                    <!--RDC-->
                    <table>
                        <tr>
                            <th class="classes" scope="section1" id="case_RDC_3_1" colspan="3"></th>
                            <th class="classes" scope="section2" id="case_RDC_3_2" colspan="3"></th>
                            <th class="classes" scope="section2" id="case_RDC_3_3"></th>
                            <th class="classes" scope="section3" id="case_RDC_3_4"></th>
                            <th class="classes" scope="section3" id="case_RDC_3_5"></th>
                            <th class="classes" scope="section3" id="case_RDC_3_6"></th>
                        </tr>
                        <tr>
                            <th colspan="10" class="couloir" id="couloirRDC"></th>
                        </tr>
                        <tr>
                            <th class="classes" scope="section1" id="case_RDC_2_1"></th>
                            <th class="classes" scope="section1" id="case_RDC_2_2"></th>
                            <th class="classes"                  id="case_RDC_2_3"></th>
                            <th class="classes"                  id="case_RDC_2_4"></th>
                            <th class="classes" scope="section2" id="case_RDC_2_5"></th>
                            <th class="classes" scope="section2" id="case_RDC_2_6"></th>
                            <th class="classes" scope="section2" id="case_RDC_2_7"></th>
                            <th class="classes" scope="section3" id="case_RDC_2_8"></th>
                            <th class="classes" scope="section3" id="case_RDC_2_9"></th>
                            <th class="classes" scope="section3" id="case_RDC_2_10"></th>
                        </tr>
                        <tr>
                            <th class="classes" scope="section1" id="case_RDC_1_1"></th>
                            <th class="classes" scope="section1" id="case_RDC_1_2"></th>
                            <th class="classes" scope="section1" id="case_RDC_1_3"></th>
                            <th class="classes" scope="section2" id="case_RDC_1_4"></th>
                            <th class="classes" scope="section2" id="case_RDC_1_5"></th>
                            <th class="classes" scope="section2" id="case_RDC_1_6"></th>
                            <th class="classes" scope="section2" id="case_RDC_1_7"></th>
                            <th class="classes" scope="section3" id="case_RDC_1_8"></th>
                            <th class="classes" scope="section3" id="case_RDC_1_9"></th>
                            <th class="classes" scope="section3" id="case_RDC_1_10"></th>
                        </tr>
                    </table>
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