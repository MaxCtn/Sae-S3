<?php 
function start_index() { 


    ?><!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>BackToBachelor - Accueil</title>  
            <script src="./javascript.js"></script>
            <link rel="stylesheet" href="./css/styleAccueil.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        </head>
        <body>
            <header>
                <h1 class="titre">Nom </h1>
                <h1> du jeux</h1>
            </header>
            <div class="menu">
                <div class="presentation vignets">
                    <h2>
                        Présentation du BUT
                    </h2>
                    <div class="video"><iframe class="videoAnim videoCSS" src="https://www.youtube.com/embed/XT-J08QxA68" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="boutton_droite vignets">
                    <a href="./pages/choixSpe.php" class="transi">Jouer</a>
                    <a href="./pages/classement.php" class="transi2">Classement</a>
                    <a href="./pages/info.php" class="transi3">Infos</a>
                    <a href="./pages/contact.php" class="transi4">Nous contacter</a>
                </div> 
            </div>
            <div class="menu2">
                <div class="presentation">
                    <h2>
                        Présentation du BUT
                    </h2>
                    <div id="video"><iframe class="videoCSSResp"  src="https://www.youtube.com/embed/XT-J08QxA68" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="boutton_droite">
                    <a href="./pages/choixSpe.php">Jouer</a>
                    <a href="./pages/classement.php">classement</a>
                </div> 
                <div class="boutton_droite">
                    
                    <a href="./pages/info.php">Infos</a>
                    <a href="./pages/contact.php">Nous contacter</a>
                </div> 
            </div>
        


        </body>
    </html>
<?php } ?>

<?php start_index();
            
 

?>