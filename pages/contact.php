<?php function startContact() { ?>
    <!DOCTYPE html>
<<<<<<< HEAD
    <html>
=======
    <html lang="fr">
>>>>>>> WorkDir
        <head>
            <!--<script src="https://kit.fontawesome.com/8e09982db4.js" crossorigin="anonymous"></script>-->
            <title>BackToBachelor - Nous Contacter</title>  
            <script src="../javascript.js"></script>
<<<<<<< HEAD
            <link rel="stylesheet" href="../css/styleAccueil.css">
            <meta charset="UTF-8">
=======
            <link rel="stylesheet" href="../css/styleContact.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
>>>>>>> WorkDir
        </head>
        <body>
            <header>
                <div class="entete_info">
<<<<<<< HEAD
                    <div class="rubrique_menu"><a href="../index.php"><img id="return" src="../images/maison.png"></a></div>
                    <div class="rubrique_menu"><h1 class="a_propos">Nous contacter</h1></div>
                </div>
            </header>
            <div id="confirmeForm">Votre formulaire à bien été envoyé</div>
            <div class="menu">
=======
                    <div class="rubrique_menu"><a href="../index.php"><img id="return" alt="retour" src="../images/maison.png"></a></div>
                    <div class="rubrique_menu"><h1 class="contact_titre">Nous contacter</h1></div>
                </div>
            </header>
            <div class="menu">
                <div class="presentation_form vignets">
                    <div class="titre_mail">
                        Formulaire :
                    </div>
                    <form name="form">
                        <div class="info_mail">
                            <div class="nom_prenom">
                                <input class="nom" type="text" placeholder="Nom">
                                <input class="prenom" type="text" placeholder="Prenom">
                            </div>
                            <div class="mail">
                                <input class="mail" type="email" placeholder="Adresse E-Mail">
                            </div>
                        </div>
                        <div class="p_mail">
                            <textarea class="p_mail" placeholder="Qu'avez-vous pensés du jeu ?"></textarea>
                        </div>
                        <div class="valide_form">
                            <button class="valideChoix" onclick="formConfirme()">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="menu2">
>>>>>>> WorkDir
                <div class="presentation_form">
                    <div class="titre_mail">
                        Formulaire :
                    </div>
                    <div class="info_mail">
                        <div class="nom_prenom">
<<<<<<< HEAD
                            <input id="nom" type="text" placeholder="Nom">
                            <input id="prenom" type="text" placeholder="Prenom">
                        </div>
                        <div class="mail">
                            <input id="mail" type="mail" placeholder="Adresse E-Mail">
                        </div>
                    </div>
                    <div class="p_mail">
                        <textarea id="p_mail" placeholder="Qu'avez-vous pensés du jeu ?"></textarea>
                    </div>
                    <div class="valide_form">
                        <button id="valideChoix" onclick="formConfirme()">Valider</button>
=======
                            <input class="nom" type="text" placeholder="Nom">
                            <input class="prenom" type="text" placeholder="Prenom">
                        </div>
                        <div class="mail">
                            <input class="mail" type="email" placeholder="Adresse E-Mail">
                        </div>
                    </div>
                    <div class="p_mail">
                        <textarea class="p_mail" placeholder="Qu'avez-vous pensés du jeu ?"></textarea>
                    </div>
                    <div class="valide_form">
                        <button class="valideChoix" onclick="formConfirme()">Valider</button>
>>>>>>> WorkDir
                    </div>
                </div>
            </div>
        </body>
    </html>

<?php } ?>
<?php startContact(); ?>