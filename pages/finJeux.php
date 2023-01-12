<?php function start_fin($score,$spe) { ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>BackToBachelor - Fin du Quizz</title>
        <script src="../javascript.js"></script>
        <link rel="stylesheet" href="../css/styleFinJeux.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    </head>
    <body>
        <header>
            <a href="../index.php"><h1 class="titre">Nom </h1></a>
            <a href="../index.php"><h1> du jeu</h1></a>
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
                        <input style="display:none" type="text" name="score" value=<?php echo $score;?>>
                        <input style="display:none" type="text" name="spe" value=<?php echo $spe;?>>
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