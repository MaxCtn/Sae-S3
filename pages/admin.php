<?php function startContact() { ?>
    <!DOCTYPE html>
    <html>
        <head>
            <!--<script src="https://kit.fontawesome.com/8e09982db4.js" crossorigin="anonymous"></script>-->
            <link rel="icon" type="image/x-icon" href="../images/Bachelor.ico" sizes="96x96" /> 
            <title>BackToBachelor - Nous Contacter</title>  
            <script src="../javascript.js"></script>
            <link rel="stylesheet" href="../css/styleContact.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        </head>
        <body>
            <header>
                <div class="entete_info">
                    <div class="rubrique_menu"><a href="../index.php"><img id="return" src="../images/maison.png"></a></div>
                    <div class="rubrique_menu"><h1 class="contact_titre">Nous contacter</h1></div>
                </div>
            </header>
            <div id="confirmeForm">Votre formulaire à bien été envoyé</div>
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
        </body>
    </html>

<?php } ?>
<?php startContact(); ?>