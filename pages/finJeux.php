<?php 
/*fonction démarrant la page fin du jeu*/
function start_fin($score,$spe) { ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Objectif BUT - Fin du Quizz</title>
        <link rel="icon" type="image/x-icon" href="../images/Bachelor.ico" sizes="96x96" /> 
        <script src="../javascript.js"></script>
        <link rel="stylesheet" href="../css/styleFinJeux.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <meta name="description" content="Page de fin du jeu Objectif BUT dans laquelle le joueur connait son score et peut enregistrer ses données du jeu">
    </head>
    <body>
        <header>
            <a href="../index.php"><h1 class="titre">Objectif </h1></a>
            <a href="../index.php"><h1> BUT</h1></a>
        </header>
        <div class="planPage">
            <div class="vide">
            </div>
            <div class="menuVictoire">
                <div class="titreFin">
                    BIEN JOUE !!!
                </div>
                <div class="pseudoText">
                    Entrez votre pseudo pour enregistrer votre score : <?php echo $score; ?>
                </div>
                <form class="formStyle" method="post" action="classement.php"> 
                    <div class="pseudoInput">
                        <input class="pseudo" type="text" name="pseudo" placeholder="Pseudo">
                        <input id="score" type="text" name="score" value=<?php echo $score;?>>
                        <input id="spe" type="text" name="spe" value=<?php echo $spe;?>>
                    </div>

                    <div class="validation">
                        <div class="divBoutonValid"><input class="bouton_validation" type="submit"></div>
                        <div class="divBoutonValid"><a class="bouton_validation" href="../index.php">Ne pas enregistrer mon score</a></div>
                    </div>
                </form>
            </div>
            <div class="vide">
            </div>
        </div>
    </body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
</html>

<?php }
$score = $_POST["score"];
$spe = $_POST["spe"];
start_fin($score,$spe); ?>