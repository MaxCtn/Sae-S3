<?php function startCoAdmin() { ?>
    <!DOCTYPE html>
    <html>
        <head>
            <!--<script src="https://kit.fontawesome.com/8e09982db4.js" crossorigin="anonymous"></script>-->
            <link rel="icon" type="image/x-icon" href="../images/Bachelor.ico" sizes="96x96" /> 
            <title>BackToBachelor - Connection Admin</title>  
            <script src="../javascript.js"></script>
            <link rel="stylesheet" href="../css/styleContact.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        </head>
        <body>
            <header>
                <div class="entete_info">
                    <div class="rubrique_menu"><a href="../index.php"><img id="return" src="../images/maison.png"></a></div>
                    <div class="rubrique_menu"><h1 class="contact_titre">Se connecter</h1></div>
                </div>
            </header>
            <div class="menu">
                <div class="presentation_form">
                    <div class="titre_mail">
                        Formulaire :
                    </div>

                    <form action="resultAdmin.php" method="POST">
                        <div class="info_mail">
                            <div class="nom_prenom">
                                <input id="id" name="id" type="text" placeholder="Id">
                            </div>
                            <input id="motDePasse" type="password" name="motDePasse" placeholder="Mot de Passe">

                        </div>
                        <div class="valide_form">
                            <input type="submit" name="action" value="valider"/>
                        </div>
                        
                    </form>
                </div>
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

            <div id="questionGeneral"><p>div1</p><?php questionGeneral();?></div>
            <div id="questionProgrammation"><p>div2</p></div>
            <div id="questionBD"></div>
            <div id="questionWeb"></div>
            <div id="questionSysteme"></div>
            <div id="questionReseaux"></div>
        </body>
    </html>

<?php } ?>
<?php startCoAdmin(); ?>

<?php 
function questionGeneral(){
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryId = mysqli_query($dbLink, "SELECT * FROM QUESTION WHERE THEME='General' AND DIFFICULTE = 1 ORDER BY Rand() LIMIT 3;");

    if (!$queryId) {
        echo 'Impossible d\'exécuter la requête : ', mysqli_error($dbLink);
    }
    else
    {
        if(mysqli_num_rows($queryId) != 0)
        {
            $i = 0;
            while ($row = mysqli_fetch_assoc($queryId))
            {
                $numQuestion = "question" . $i;
                ?>
                <div class = "questionDifficulte1" id = <?php $numQuestion?>>
                <?php

                    ?>
                    <p class = "Libelle"> <?php echo $row["LIBELLE"];?> </p>
                    <p class = "Indice"> <?php echo $row["INDICE"];?> </p>
                    <p class = "Explication"> <?php echo $row["EXPLICATION"];?> </p>
                    <?php


                    //Reponse et bonneReponse
                    for ($j=0; $j < 4; $j++) { 
                        $rep = null;
                        $queryLib = mysqli_prepare($dbLink, 'SELECT LIBELLE From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET ?;');
                        mysqli_stmt_bind_param($queryLib, "ss", $row["ID_QUESTION"],$j);
                        mysqli_execute($queryLib);
                        mysqli_stmt_bind_result($queryLib, $rep);
                        mysqli_stmt_fetch($queryLib);
                        ?>
                        <p> <?php echo $rep;?> </p>
                        <?php

                        
                        mysqli_stmt_close($queryLib);
                    }
                ?>
                </div>
                <?php
                $i += 1;
            }
        }
    }
}
