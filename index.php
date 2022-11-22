<?php 
function start_index() { 


    ?><!DOCTYPE html>
    <html>
        <head>
            <title>BackToBachelor - Accueil</title>  
            <script src="./javascript.js"></script>
            <link rel="stylesheet" href="./css/styleAccueil.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        </head>
        <body>
            <header>
                <h1 class="titre">Nom </h1>
                <h1> du jeux</h1>
            </header>
            <div class="menu">
                <div class="presentation">
                    <h2>
                        Présentation du BUT
                    </h2>
                    <div id="video"><iframe width="850" height="500" src="https://www.youtube.com/embed/XT-J08QxA68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="boutton_droite">
                    <a href="./pages/choixSpe.php"><button id="jouer">Jouer</button></a>
                    <a href="./pages/classement.php"><button id="classement">classement</button></a>
                    <a href="./pages/info.php"><button id="infos">Infos</button></a>
                    <a href="./pages/contact.php"><button id="contact">Nous contacter</button></a>
                </div> 
            </div>
            <div class="menu2">
                <div class="presentation">
                    <h2>
                        Présentation du BUT
                    </h2>
                    <div id="video"><iframe width="100%" height="200px" src="https://www.youtube.com/embed/XT-J08QxA68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="boutton_droite">
                    <a href="./pages/choixSpe.php"><button id="jouer">Jouer</button></a>
                    <a href="./pages/classement.php"><button id="classement">classement</button></a>
                </div> 
                <div class="boutton_droite">
                    
                    <a href="./pages/info.php"><button id="infos">Infos</button></a>
                    <a href="./pages/contact.php"><button id="contact">Nous contacter</button></a>
                </div> 
            </div>
        


        </body>
    </html>
<?php } ?>

<?php start_index();
            
 

?>