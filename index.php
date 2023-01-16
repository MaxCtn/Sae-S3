<?php 
/*fonction démarrant la page index*/
function start_index() { 
    ?>
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>Objectif BUT - Accueil</title> 
            <link rel="icon" type="image/x-icon" href="images/Bachelor.ico" sizes="96x96" /> 
            <script src="./javascript.js"></script>
            <link rel="stylesheet" href="./css/styleAccueil.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
            <meta name="description" content="Page d'accueil du jeu Objectif BUT dans laquelle on peut avoir accès à différentes rubriques et visionner une vidéo de présentation">
        </head>
        <body>
            <header>
                <h1 class="titre">Objectif </h1>
                <h1> BUT</h1>
            </header>
            <div class="menu">
                <div class="presentation vignets">
                    <h2>
                        Présentation du BUT
                    </h2>
                    <div class="video"><iframe class="videoAnim videoCSS" src="https://www.youtube.com/embed/3HMh95gDKDI" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="boutton_droite vignets">
                    <a href="./pages/choixSpe.php"><div class="lien transi">Jouer</div></a>
                    <a href="./pages/classement.php"><div class="lien transi2">Classement</div></a>
                    <a href="./pages/info.php"><div class="lien transi3">Infos</div></a>
                    <a href="./pages/contact.php"><div class="lien transi4">Nous contacter</div></a>
                </div> 
            </div>
            <div class="menu2">
                <div class="presentation">
                    <h2>
                        Présentation du BUT
                    </h2>
                    <div class="video"><iframe class="videoAnim videoCSSResp" src="https://www.youtube.com/embed/3HMh95gDKDI" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="boutton_droite">
                    <a href="./pages/choixSpe.php"><div class="lien">Jouer</div></a>
                    <a href="./pages/classement.php"><div class="lien">classement</div></a>
                </div> 
                <div class="boutton_droite">
                    
                    <a href="./pages/info.php"><div class="lien">Infos</div></a>
                    <a href="./pages/contact.php"><div class="lien">Nous contacter</div></a>
                </div> 
            </div>
        </body>
    </html>
<?php } ?>

<?php start_index();
            
 

?>