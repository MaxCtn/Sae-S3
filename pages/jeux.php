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

<?php function startJeux($spe) { ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <link rel="icon" type="image/x-icon" href="../images/Bachelor.ico" sizes="96x96" /> 
        <title>BackToBachelor - Jeux</title>  
        <script src="../jeux.js"></script>
        <link rel="stylesheet" href="../css/styleJeux.css">
        <link rel="stylesheet" href="../css/stylePlan.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

    </head>
    <body>
        <div id="popup_video">
            <div class="affiche">
                <div class="enteteChoix">
                    <h3 id="titre_choixVideo">.</h3>
                    <button class="bouton_popup" onclick="closeScreenJeux()">X</button>
                </div>
                <div class="corpsChoix">
                    <div id="PopupProg"><iframe id="videoPopupProg" src="https://www.youtube.com/embed/j_9F1EtBn3Q" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div id="PopupRes"><iframe id="videoPopupRes" src="https://www.youtube.com/embed/70NeraPLWK0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div id="PopupWeb"><iframe id="videoPopupWeb" src="https://www.youtube.com/embed/XwCeoVFbVT4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div id="PopupBd"><iframe id="videoPopupBd" src="https://www.youtube.com/embed/j-441JVj5c8" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div id="PopupSys"><iframe id="videoPopupSys" src="https://www.youtube.com/embed/8NuYZ0MfimA" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div id="PopupJsp"><iframe id="videoPopupJsp" src="https://www.youtube.com/embed/nVdeTaxIPpc" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div id="jeux" class="valideChoix" onclick="closeScreenJeux()">OK</div>
                </div>
            </div>
        </div>
        <div class="affichage">
            <div class="affichage_gauche">
                <div id = "plan">
                    <a id = "lienFreepik" href="http://www.freepik.com">Designed by rawpixel.com / Freepik</a>
                    <!--2e étage-->
                    <table>
                        <tr>
                            <th class="section7" id="case_2E_2_1" colspan="3"></th>
                            <th class="section8" id="case_2E_2_2" colspan="2"></th>
                            <th class="section8" id="case_2E_2_3" colspan="2"></th>
                            <th class="section9" id="case_2E_2_4" colspan="2"></th>
                            <th                  id="case_2E_2_5"></th>
                        </tr>
                        <tr>
                            <th colspan="10" class="couloir" id="couloir2E"></th>
                        </tr>
                        <tr>
                            <th class="section7" id="case_2E_1_1"></th>
                            <th class="section7" id="case_2E_1_2"></th>
                            <th class="section7" id="case_2E_1_3"></th>
                            <th class="section8" id="case_2E_1_4"></th>
                            <th class="section8" id="case_2E_1_5"></th>
                            <th class="section8" id="case_2E_1_6"></th>
                            <th class="section9" id="case_2E_1_7"></th>
                            <th class="section9" id="case_2E_1_8"></th>
                            <th class="section9" id="case_2E_1_9"></th>
                            <th class="section9" id="case_2E_1_10"></th>
                        </tr>
                    </table>

                    <!--1er étage-->
                    <table>
                        <tr>
                            <th class="section6" id="case_1E_2_1" colspan="2"></th>
                            <th class="section5" id="case_1E_2_2" colspan="2"></th>
                            <th class="section5" id="case_1E_2_3" colspan="2"></th>
                            <th class="section4" id="case_1E_2_4" colspan="2"></th>
                            <th class="section4" id="case_1E_2_5"></th>
                        </tr>
                        <tr>
                            <th colspan="9" class="couloir" id="couloir1E"></th>
                        </tr>
                        <tr>
                            <th class="section6" id="case_1E_1_1"></th>
                            <th class="section6" id="case_1E_1_2"></th>
                            <th class="section6" id="case_1E_1_3"></th>
                            <th class="section5" id="case_1E_1_4"></th>
                            <th class="section5" id="case_1E_1_5"></th>
                            <th class="section5" id="case_1E_1_6"></th>
                            <th class="section5" id="case_1E_1_7"></th>
                            <th class="section4" id="case_1E_1_8"></th>
                            <th class="section4" id="case_1E_1_9"></th>
                        </tr>
                    </table>
                    
                    <!--RDC-->
                    <table>
                        <tr>
                            <th class="section1" id="case_RDC_3_1" colspan="3"></th>
                            <th class="section2" id="case_RDC_3_2" colspan="3"></th>
                            <th class="section2" id="case_RDC_3_3"></th>
                            <th class="section3" id="case_RDC_3_4"></th>
                            <th class="section3" id="case_RDC_3_5"></th>
                            <th class="section3" id="case_RDC_3_6"></th>
                        </tr>
                        <tr>
                            <th colspan="10" class="couloir" id="couloirRDC"></th>
                        </tr>
                        <tr>
                            <th class="section1" id="case_RDC_2_1"></th>
                            <th class="section1" id="case_RDC_2_2"></th>
                            <th                  id="case_RDC_2_3"></th>
                            <th                  id="case_RDC_2_4"></th>
                            <th class="section2" id="case_RDC_2_5"></th>
                            <th class="section2" id="case_RDC_2_6"></th>
                            <th class="section2" id="case_RDC_2_7"></th>
                            <th class="section3" id="case_RDC_2_8"></th>
                            <th class="section3" id="case_RDC_2_9"></th>
                            <th class="section3" id="case_RDC_2_10"></th>
                        </tr>
                        <tr>
                            <th class="section1" id="case_RDC_1_1"></th>
                            <th class="section1" id="case_RDC_1_2"></th>
                            <th class="section1" id="case_RDC_1_3"></th>
                            <th class="section2" id="case_RDC_1_4"></th>
                            <th class="section2" id="case_RDC_1_5"></th>
                            <th class="section2" id="case_RDC_1_6"></th>
                            <th class="section2" id="case_RDC_1_7"></th>
                            <th class="section3" id="case_RDC_1_8"></th>
                            <th class="section3" id="case_RDC_1_9"></th>
                            <th class="section3" id="case_RDC_1_10"></th>
                        </tr>
                    </table>
                </div>
                <div class="bot">

                </div>
            </div>

            <div id="blockFinQuizz">
                <form id="formFinQuizz" method ="post" action="finJeux.php">
                    <input id="score" name="score" type="number" value="0">
                    <input id="versFin" type="submit">
                </form>
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
                <div id="corps_question">
                    <div id="blockQuizz">
                        <div class="question">
                            <h2 id="questionPosee">cliquez sur Valider</h2>
                        </div>
                        <div class="reponse">
                            <div class="reponseLigne"> 
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
                        <div id="specialite"><?php 
                        echo $spe; ?></div> 
                    </div>
                </div>
    
                

                <div id="boiteCarteAideBot">
                    <div id="aideBot">
                        <div id="barreNavBot">
                            <p id="titreBot">Help Bot</p>
                            <p id="tempsRestant"></p>
                            <img alt="logoBouttonBotHaut" id="logoBouttonBotHaut" class="logoBouttonBot" src="../images/bot.png"  onclick = "ouvrirBot()">
                            <img alt="logoBouttonBotBas" id="logoBouttonBotBas" class="logoBouttonBot" src="../images/flechehaut.png" 
                            onclick = "fermerBot()">
                    
                        </div>
                        <div id="chatBot">

                        </div>
                    </div>
                </div>
            </div>
        </div>



        
        <div class="affichageMobile">
            <div class="affichage_gauche">
                <div id = "planMobile" style="display:none">
                    <a id = "lienFreepik" href="http://www.freepik.com">Designed by rawpixel.com / Freepik</a>
                    <!--2e étage-->
                    <table>
                        <tr>
                            <th class="section7" id="case_2E_2_1" colspan="3"></th>
                            <th class="section8" id="case_2E_2_2" colspan="2"></th>
                            <th class="section8" id="case_2E_2_3" colspan="2"></th>
                            <th class="section9" id="case_2E_2_4" colspan="2"></th>
                            <th                  id="case_2E_2_5"></th>
                        </tr>
                        <tr>
                            <th colspan="10" class="couloir" id="couloir2E"></th>
                        </tr>
                        <tr>
                            <th class="section7" id="case_2E_1_1"></th>
                            <th class="section7" id="case_2E_1_2"></th>
                            <th class="section7" id="case_2E_1_3"></th>
                            <th class="section8" id="case_2E_1_4"></th>
                            <th class="section8" id="case_2E_1_5"></th>
                            <th class="section8" id="case_2E_1_6"></th>
                            <th class="section9" id="case_2E_1_7"></th>
                            <th class="section9" id="case_2E_1_8"></th>
                            <th class="section9" id="case_2E_1_9"></th>
                            <th class="section9" id="case_2E_1_10"></th>
                        </tr>
                    </table>

                    <!--1er étage-->
                    <table>
                        <tr>
                            <th class="section6" id="case_1E_2_1" colspan="2"></th>
                            <th class="section5" id="case_1E_2_2" colspan="2"></th>
                            <th class="section5" id="case_1E_2_3" colspan="2"></th>
                            <th class="section4" id="case_1E_2_4" colspan="2"></th>
                            <th class="section4" id="case_1E_2_5"></th>
                        </tr>
                        <tr>
                            <th colspan="9" class="couloir" id="couloir1E"></th>
                        </tr>
                        <tr>
                            <th class="section6" id="case_1E_1_1"></th>
                            <th class="section6" id="case_1E_1_2"></th>
                            <th class="section6" id="case_1E_1_3"></th>
                            <th class="section5" id="case_1E_1_4"></th>
                            <th class="section5" id="case_1E_1_5"></th>
                            <th class="section5" id="case_1E_1_6"></th>
                            <th class="section5" id="case_1E_1_7"></th>
                            <th class="section4" id="case_1E_1_8"></th>
                            <th class="section4" id="case_1E_1_9"></th>
                        </tr>
                    </table>
                    
                    <!--RDC-->
                    <table>
                        <tr>
                            <th class="section1" id="case_RDC_3_1" colspan="3"></th>
                            <th class="section2" id="case_RDC_3_2" colspan="3"></th>
                            <th class="section2" id="case_RDC_3_3"></th>
                            <th class="section3" id="case_RDC_3_4"></th>
                            <th class="section3" id="case_RDC_3_5"></th>
                            <th class="section3" id="case_RDC_3_6"></th>
                        </tr>
                        <tr>
                            <th colspan="10" class="couloir" id="couloirRDC"></th>
                        </tr>
                        <tr>
                            <th class="section1" id="case_RDC_2_1"></th>
                            <th class="section1" id="case_RDC_2_2"></th>
                            <th                  id="case_RDC_2_3"></th>
                            <th                  id="case_RDC_2_4"></th>
                            <th class="section2" id="case_RDC_2_5"></th>
                            <th class="section2" id="case_RDC_2_6"></th>
                            <th class="section2" id="case_RDC_2_7"></th>
                            <th class="section3" id="case_RDC_2_8"></th>
                            <th class="section3" id="case_RDC_2_9"></th>
                            <th class="section3" id="case_RDC_2_10"></th>
                        </tr>
                        <tr>
                            <th class="section1" id="case_RDC_1_1"></th>
                            <th class="section1" id="case_RDC_1_2"></th>
                            <th class="section1" id="case_RDC_1_3"></th>
                            <th class="section2" id="case_RDC_1_4"></th>
                            <th class="section2" id="case_RDC_1_5"></th>
                            <th class="section2" id="case_RDC_1_6"></th>
                            <th class="section2" id="case_RDC_1_7"></th>
                            <th class="section3" id="case_RDC_1_8"></th>
                            <th class="section3" id="case_RDC_1_9"></th>
                            <th class="section3" id="case_RDC_1_10"></th>
                        </tr>
                    </table>
                </div>
                <div class="bot">

                </div>
            </div>

            
            <div class="affichage_droite">
                <div class="entete">
                   
                    <header>
                        <h1 class="titre">Nom</h1>
                        <h1>du jeux</h1>
                    </header>
                   
                </div>
                <div class="num_question">
                        <h3 id ="numMobile">0</h3>
                    </div>
                <div id="corps_questionMobile">
                    <div id="blockQuizzMobile">
                        <div class="question">
                            <h2 id="questionPoseeMobile">clic sur oui</h2>
                        </div>
                        <div class="reponse">
                            <div class="reponseLigne"> 
                                <button id="rep1Mobile" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionneMobile(this.id)">non</button>
                                
                                <button id="rep2Mobile" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionneMobile(this.id)">non</button>
                            </div>
                            <div class="reponseLigne">
                                <button id="rep3Mobile" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionneMobile(this.id)">oui</button>
                                <button id="rep4Mobile" style="background-color: #00B7E9; width: 350px;" onclick="gestionReponseSelectionneMobile(this.id)">non</button>
                            </div>
                        </div>
                        <div class="soumettre">
                            
                            <button id="soumettreMobile" onclick="cliqueValiderOuContinuerMobile(this.id)">Valider</button>
                        </div>
                        <div id="specialiteMobile" style="display:none"><?php 
                        echo $spe; ?></div>
                    </div>
                </div>
                

                <div id="boiteCarteAideBot">
                    <div id="aideBot">
                        <div id="barreNavBot">
                            <p id="titreBot">Help Bot</p>
                            <p id="tempsRestant"></p>
                            <img alt="logoBouttonBotHaut" id="logoBouttonBotHaut" class="logoBouttonBot" src="../images/bot.png"  onclick = "ouvrirBot()">
                            <img alt="logoBouttonBotBas" id="logoBouttonBotBas" class="logoBouttonBot" src="../images/flechehaut.png" 
                            onclick = "fermerBot()">
                    
                        </div>
                        <div id="chatBot">

                        </div>
                    </div>
                </div>
                <div id="blockFinQuizzMobile">
                <form id="formFinQuizzMobile" method ="post" action="finJeux.php">
                    <input id="scoreMobile" name="score" type="number" value="0">
                    <input id="versFinMobile" type="submit">
                </form>
            </div>

            </div>
        </div>







        
    </body>
</html>
<?php } ?>


<?php
$spe = $_POST["spe"];
startJeux($spe); ?>