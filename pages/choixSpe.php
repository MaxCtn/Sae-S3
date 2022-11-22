<?php function start_choix_spe() { ?>
    <!DOCTYPE html>
<html>
    <head>
        <title>BackToBachelor - Choix spécialitée</title>
        <script src="../javascript.js"></script>
        <link rel="stylesheet" href="../css/styleChoix.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    </head>
    <body>
        <header>
            <a href="../index.php"><h1 class="titre">Nom </h1></a>
            <a href="../index.php"><h1> du jeux</h1></a>
        </header>
        <div class="menu">
            <div id="popup">
                <div class="affiche">
                    <div class="enteteChoix">
                        <h3 id="titre_choix"></h3>
                        <button class="bouton_popup" onclick="closeScreen(popup)">X</button>
                    </div>
                    <div class="corpsChoix">
                        <p id="p_choix">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Fusce commodo quam nec ex bibendum sodales. Phasellus massa urna, finibus sit amet tortor eget, congue rutrum purus. 
                        Phasellus pellentesque mollis dolor. 
                        Mauris lacinia elementum nisl id luctus. 
                        Mauris sollicitudin eleifend tellus, ac convallis risus gravida id.
                        </br>
                        </br>
                        Sed eu tellus non leo finibus sodales et placerat odio. Donec commodo nulla quis pharetra semper. 
                        Sed eget risus sit amet ex mollis pharetra. Donec sed ante magna. In fringilla a quam non gravida. 
                        Fusce sit amet metus porttitor, congue est ultrices, vestibulum quam. Cras maximus aliquet nibh ac consequat.
                        </p>
                        <a id="jeux" href="./jeux.php"><button id="valideChoix">Valider mon choix</button></a>
                    </div>
                </div>
            </div>
            <div>
                <h2>Vers quel domaine pensez-vous vous diriger ?</h2>
            </div>
            <div class="ensembleBouton">
                <div class="bouton">
                    <button id="reseaux" onclick="setScreen(this.id)">Réseaux</button>
                    <button id="web" onclick="setScreen(this.id)">Web</button>
                </div>
                <div class="bouton">
                    <button id="bd" onclick="setScreen(this.id)">Base de données</button>
                    <button id="algo" onclick="setScreen(this.id)">Programmation</button>
                </div>
                <div class="bouton">
                    <button id="systeme" onclick="setScreen(this.id)">Système</button>
                    <button id="jsp" onclick="setScreen(this.id)">Je ne sais pas</button>
                </div>
            </div>

            <div class="ensembleBouton2">
                <div class="bouton">
                    <button id="reseaux" onclick="setScreen(this.id)">Réseaux</button>
                    <button id="web" onclick="setScreen(this.id)">Web</button>
                </div>
                <div class="bouton">
                    <button id="bd" onclick="setScreen(this.id)">Base de données</button>
                    <button id="algo" onclick="setScreen(this.id)">Programmation</button>
                </div>
                <div class="bouton">
                    <button id="systeme" onclick="setScreen(this.id)">Système</button>
                    <button id="jsp" onclick="setScreen(this.id)">Je ne sais pas</button>
                </div>
            </div>
        </div>
    </body>
</html>

<?php } start_choix_spe(); ?>