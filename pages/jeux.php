<?php
if(isset($_POST['spe'])){
    $spe = $_POST["spe"];
}
/*si la spécialité n'a pas été choisie(url direct vers jeux.php -> programmation comme spécialité par défaut)*/
else{
    $spe = "programmation";
}

startJeux($spe); ?>

<?php 
/*fonction démarrant la page de jeu*/
function startJeux($spe) { ?>
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
                    <div id="PopupProg"><iframe id="videoPopupProg" src="https://www.youtube.com/embed/Pu_ezhrOhrw" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div id="PopupRes"><iframe id="videoPopupRes" src="https://www.youtube.com/embed/R_FrLDrPbis" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div id="PopupWeb"><iframe id="videoPopupWeb" src="https://www.youtube.com/embed/SVuBQ5sImxM" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div id="PopupBd"><iframe id="videoPopupBd" src="https://www.youtube.com/embed/YN_EONlvjjs" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div id="PopupSys"><iframe id="videoPopupSys" src="https://www.youtube.com/embed/xD_hwXqluBk" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div id="jeux" class="valideChoix" onclick="closeScreenJeux()">OK</div>
                </div>
            </div>
        </div>
        <div class="affichage">
            <div class="affichage_gauche">
                <div id = "plan">
                    <!-- source de l'image de couronne <a id = "lienFreepik" href="http://www.freepik.com">Designed by rawpixel.com / Freepik</a> -->
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
                    <input id="speChoisie" type="text" name="spe" value=<?php echo($spe);?>>
                    <input id="versFin" type="submit">
                </form>
            </div>

            <div class="affichage_droite">
                <div class="entete">
                    <div class="num_question">
                        <h3 id ="num">0</h3>
                    </div>
                    <header>
                        <h1 class="titre">Objectif </h1>
                        <h1> BUT</h1>
                    </header>
                </div>
                <div id="corps_question">
                    <div id="blockQuizz">
                        <div class="question">
                            <h2 id="questionPosee">clique sur oui</h2>
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
                            <img alt="logoBoutonBotHaut" id="logoBoutonBotHaut" class="logoBoutonBot" src="../images/bot.png"  onclick = "ouvrirBot()">
                            <img alt="logoBoutonBotBas" id="logoBoutonBotBas" class="logoBoutonBot" src="../images/flechehaut.png" 
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
                
                <div class="bot">

                </div>
            </div>

            
            <div class="affichage_droite">
                <div class="entete">
                   
                    <header>
                        <h1 class="titre">Nom</h1>
                        <h1>du jeu</h1>
                    </header>
                   
                </div>
                <div class="num_question">
                        <h3 id ="numMobile">0</h3>
                        <img alt="logoCarte" id="carte" class="logoCarte" src="../images/carte.png" 
                            onclick = "afficherCarte()">
                </div>
                <div id = "planMobile">
                    <!--<a id = "lienFreepik" href="http://www.freepik.com">Designed by rawpixel.com / Freepik</a> -->
                    <!--2e étage-->
                    <table>
                        <tr>
                            <th class="section7" id="case_2E_2_1Mobile" colspan="3"></th>
                            <th class="section8" id="case_2E_2_2Mobile" colspan="2"></th>
                            <th class="section8" id="case_2E_2_3Mobile" colspan="2"></th>
                            <th class="section9" id="case_2E_2_4Mobile" colspan="2"></th>
                            <th                  id="case_2E_2_5Mobile"></th>
                        </tr>
                        <tr>
                            <th colspan="10" class="couloir" id="couloir2EMobile"></th>
                        </tr>
                        <tr>
                            <th class="section7" id="case_2E_1_1Mobile"></th>
                            <th class="section7" id="case_2E_1_2Mobile"></th>
                            <th class="section7" id="case_2E_1_3Mobile"></th>
                            <th class="section8" id="case_2E_1_4Mobile"></th>
                            <th class="section8" id="case_2E_1_5Mobile"></th>
                            <th class="section8" id="case_2E_1_6Mobile"></th>
                            <th class="section9" id="case_2E_1_7Mobile"></th>
                            <th class="section9" id="case_2E_1_8Mobile"></th>
                            <th class="section9" id="case_2E_1_9Mobile"></th>
                            <th class="section9" id="case_2E_1_10Mobile"></th>
                        </tr>
                    </table>

                    <!--1er étage-->
                    <table>
                        <tr>
                            <th class="section6" id="case_1E_2_1Mobile" colspan="2"></th>
                            <th class="section5" id="case_1E_2_2Mobile" colspan="2"></th>
                            <th class="section5" id="case_1E_2_3Mobile" colspan="2"></th>
                            <th class="section4" id="case_1E_2_4Mobile" colspan="2"></th>
                            <th class="section4" id="case_1E_2_5Mobile"></th>
                        </tr>
                        <tr>
                            <th colspan="9" class="couloir" id="couloir1EMobile"></th>
                        </tr>
                        <tr>
                            <th class="section6" id="case_1E_1_1Mobile"></th>
                            <th class="section6" id="case_1E_1_2Mobile"></th>
                            <th class="section6" id="case_1E_1_3Mobile"></th>
                            <th class="section5" id="case_1E_1_4Mobile"></th>
                            <th class="section5" id="case_1E_1_5Mobile"></th>
                            <th class="section5" id="case_1E_1_6Mobile"></th>
                            <th class="section5" id="case_1E_1_7Mobile"></th>
                            <th class="section4" id="case_1E_1_8Mobile"></th>
                            <th class="section4" id="case_1E_1_9Mobile"></th>
                        </tr>
                    </table>
                    
                    <!--RDC-->
                    <table>
                        <tr>
                            <th class="section1" id="case_RDC_3_1Mobile" colspan="3"></th>
                            <th class="section2" id="case_RDC_3_2Mobile" colspan="3"></th>
                            <th class="section2" id="case_RDC_3_3Mobile"></th>
                            <th class="section3" id="case_RDC_3_4Mobile"></th>
                            <th class="section3" id="case_RDC_3_5Mobile"></th>
                            <th class="section3" id="case_RDC_3_6Mobile"></th>
                        </tr>
                        <tr>
                            <th colspan="10" class="couloir" id="couloirRDCMobile"></th>
                        </tr>
                        <tr>
                            <th class="section1" id="case_RDC_2_1Mobile"></th>
                            <th class="section1" id="case_RDC_2_2Mobile"></th>
                            <th                  id="case_RDC_2_3Mobile"></th>
                            <th                  id="case_RDC_2_4Mobile"></th>
                            <th class="section2" id="case_RDC_2_5Mobile"></th>
                            <th class="section2" id="case_RDC_2_6Mobile"></th>
                            <th class="section2" id="case_RDC_2_7Mobile"></th>
                            <th class="section3" id="case_RDC_2_8Mobile"></th>
                            <th class="section3" id="case_RDC_2_9Mobile"></th>
                            <th class="section3" id="case_RDC_2_10Mobile"></th>
                        </tr>
                        <tr>
                            <th class="section1" id="case_RDC_1_1Mobile"></th>
                            <th class="section1" id="case_RDC_1_2Mobile"></th>
                            <th class="section1" id="case_RDC_1_3Mobile"></th>
                            <th class="section2" id="case_RDC_1_4Mobile"></th>
                            <th class="section2" id="case_RDC_1_5Mobile"></th>
                            <th class="section2" id="case_RDC_1_6Mobile"></th>
                            <th class="section2" id="case_RDC_1_7Mobile"></th>
                            <th class="section3" id="case_RDC_1_8Mobile"></th>
                            <th class="section3" id="case_RDC_1_9Mobile"></th>
                            <th class="section3" id="case_RDC_1_10Mobile"></th>
                        </tr>
                    </table>
                </div>
                <div id="corps_questionMobile">
                    <div id="blockQuizzMobile">
                        <div class="question">
                            <h2 id="questionPoseeMobile">clique sur oui</h2>
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
                        <div id="specialiteMobile"><?php 
                        echo $spe; ?></div>
                    </div>
                </div>
                

                <div id="boiteCarteAideBotMobile">
                    <div id="aideBotMobile">
                        <div id="barreNavBotMobile">
                            <p id="titreBotMobile">Help Bot</p>
                            <p id="tempsRestantMobile"></p>
                            <img alt="logoBoutonBotHaut" id="logoBoutonBotHautMobile" class="logoBoutonBot" src="../images/bot.png"  onclick = "ouvrirBot()">
                            <img alt="logoBoutonBotBas" id="logoBoutonBotBasMobile" class="logoBoutonBot" src="../images/flechehaut.png" 
                            onclick = "fermerBot()">
                    
                        </div>
                        <div id="chatBotMobile">

                        </div>
                    </div>
                </div>
                <div id="blockFinQuizzMobile">
                <form id="formFinQuizzMobile" method ="post" action="finJeux.php">
                    <input id="scoreMobile" name="score" type="number" value="0">
                    <input id="speChoisieMobile" type="text" name="spe" value=<?php echo($spe);?>>
                    <input id="versFinMobile" type="submit">
                </form>
            </div>

            </div>
        </div>
        <div id = "recuperationQuestions">
            <div id="questionsGeneralesUn"><h3>Questions Generales 1</h3><?php questionsGeneralesUn();?></div>
            <div id="questionsSpecialiteUn"><h3>Questions Specialite 1</h3><?php questionsSpeUn($spe);?></div>


            <div id="questionsGeneralesDeuxUn"><h3>Questions Generales 2</h3><?php questionsGenerales2();?></div>
            <div id="questionsSpecialitedeux"><h3>Questions Specialite 2</h3><?php questionsSpeDeux($spe);?></div>
        </div>
    </body>
</html><?php } ?>



<?php 
/*fonction récupérant et affichant les réponses */
function reponses($id,$i){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    for ($j=0; $j < 4; $j++) { 
        $rep = null;
        $queryLib = mysqli_prepare($dbLink, 'SELECT LIBELLE From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET ?;');
        mysqli_stmt_bind_param($queryLib, "ss", $id, $j);
        mysqli_execute($queryLib);
        mysqli_stmt_bind_result($queryLib, $rep);
        mysqli_stmt_fetch($queryLib);
        ?>
        <p id=<?php echo "rep" .$i .$j;?>> <?php echo $rep;?> </p>
        <?php
        mysqli_stmt_close($queryLib);

        $bon = null;
        $queryRep = mysqli_prepare($dbLink, 'SELECT BONNE_REP From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET ?;');
        mysqli_stmt_bind_param($queryRep, "ss", $id, $j);
        mysqli_execute($queryRep);
        mysqli_stmt_bind_result($queryRep, $bon);
        mysqli_stmt_fetch($queryRep);
        ?>
        <p id=<?php echo "bonOuMauvais" .$i .$j ?>> <?php if($bon==1){
            echo "bon";
        }
        else {
            echo "mauvais";
        }
        ?> </p>
        <?php
        mysqli_stmt_close($queryRep);

    }
}
?>

<?php 
/* Ici nous utilisons les mêmes types de fonctions qui permettent de récupérer 
et afficher les questions et réponses selon les spécialités*/
?>

<?php 
function questionsGeneralesUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='General' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 3;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 0;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "question" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsGenerales2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='General' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 3;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 5;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionGeneralDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsProgrammationUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Programmation' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 3;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionSpeUn" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsProgrammation2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Programmation' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 8;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionquestionSpeDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsBDUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='BD' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 3;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionsSpeUn" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsBD2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='BD' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 8;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionsSpeDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsWebUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Web' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 3;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionsSpeUn" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsWeb2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Web' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 8;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionsSpeDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsSystemeUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Systeme' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 3;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionSpeUn" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsSysteme2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Systeme' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 8;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionSpeDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsReseauxUn(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Reseaux' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 3;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionSpeUn" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>
                        <?php reponses($row["ID_QUESTION"],$i);

                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
function questionsReseaux2(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryQuestion = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='Reseaux' AND DIFFICULTE = 2 ORDER BY Rand() LIMIT 2;");

    if (!$queryQuestion) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryQuestion) != 0)
        {
            $i = 8;
            while ($row = mysqli_fetch_assoc($queryQuestion))
            {
                $numQuestion = "questionSpeDeux" . $i;   
                ?>

                    <div class = "questionDifficulte1" id = <?php echo $numQuestion;?>>
                
                        <p id = <?php echo "Libelle" . $i;?>> <?php echo $row["LIBELLE"];?> </p>
                        <p id = <?php echo "Indice" .$i?>> <?php echo $row["INDICE"];?> </p>
                        <p id = <?php echo "Explication" .$i?>> <?php echo $row["EXPLICATION"];?> </p>

                        <?php
                            //Reponse et bonneReponse
                            reponses($row["ID_QUESTION"],$i);
                        ?>
                    </div>
                <?php
                $i += 1;
            }
        }
    }
}
?>

<?php
/*fonction indiquant quelle fonction de question un deux utiliser, en fonction de la spécialité choisie */
function questionsSpeUn($spe) {
    if($spe=="bd" || $spe=="bdMobile") {
        return questionsBDUn();
    }
    else if($spe=="reseaux" || $spe == "reseauxMobile") {
        return questionsReseauxUn();
    }
    else if($spe=="programmation" || $spe == "programmationMobile") {
        return questionsProgrammationUn();
    }
    else if($spe=="web" || $spe == "webMobile") {
        return questionsWebUn();
    }
    else if($spe=="systeme" || $spe == "systemeMobile") {
        return questionsSystemeUn();
    }
}
?>


<?php
/*fonction indiquant quelle fonction de question niveau deux utiliser, en fonction de la spécialité choisie */
function questionsSpeDeux($spe) {
    if($spe=="bd" || $spe=="bdMobile") {
        return questionsBD2();
    }
    else if($spe=="reseaux" || $spe == "reseauxMobile") {
        return questionsReseaux2();
    }
    else if($spe=="programmation" || $spe == "programmationMobile") {
        return questionsProgrammation2();
    }
    else if($spe=="web" || $spe == "webMobile") {
        return questionsWeb2();
    }
    else if($spe=="systeme" || $spe == "systemeMobile") {
        return questionsSysteme2();
    }
}
?>