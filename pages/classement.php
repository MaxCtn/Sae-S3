<?php
/*fonction permettant d'ajouter un gagnant dans la base de données*/
function AjouteGagnant($pseudo, $score,$spe)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryReponse = mysqli_prepare($dbLink, 'INSERT Into GAGNANT(NOM_GAGNANT, SCORE,SPECIALITE) Values (?, ?, ?);');
    mysqli_stmt_bind_param($queryReponse, "sss", $pseudo, $score, $spe);
    mysqli_execute($queryReponse);
    mysqli_stmt_close($queryReponse);
}
?>

<?php
/*fonction permettant de renvoyer la liste des gagnants dans la base de données*/
function recupGagnant() {
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT * FROM GAGNANT ORDER BY SCORE DESC';
    $result = mysqli_query($dbLink, $query);
    if (!$result)
    {
    echo 'Impossible d\'exécuter la requête ', $query, ' : ', mysqli_error($dbLink);
    }
    else
    {
        if (mysqli_num_rows($result) != 0)
        {
            $listeGagnant=array();
            while ($row = mysqli_fetch_assoc($result))
            {
               
                    $listeGagnant[] = $row['NOM_GAGNANT'];
                    $listeGagnant[] = $row['SPECIALITE'];
                    $listeGagnant[] = $row['SCORE'];

            }
            return $listeGagnant;
           
        } 
    } 
}
?>


<?php 
/*fonction démarrant la page classement*/
function start_classement($e,$nb) { 
    ?>
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>Objectif BUT - Classement</title>  
            <link rel="icon" type="image/x-icon" href="../images/Bachelor.ico" sizes="96x96" /> 
            <script src="./javascript.js"></script>
            <link rel="stylesheet" href="../css/styleClassement.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
            <meta name="description" content="Page de classement des résultats du jeu Objectif BUT">
        </head>
        <body>
        <header>
            <div class="entete_info">
                <div class="rubrique_menu"><a href="../index.php"><img id="return" alt="retour" src="../images/maison.png"></a></div>
                <div class="rubrique_menu"><h1 class="classement_titre">Classement</h1></div>
            </div>
        </header>
        <div class="menu">
            <table id="classement_tab" class="vignets">
                <tr id="premiere_ligne">
                    <th>#</th>
                    <th>Pseudo</th>
                    <th>Spécialité</th>
                    <th>Score</th>
                </tr>
                
                <?php $x = 0 ?>
                <?php while($nb > $x/3) { ?>
                <tr>
                    <td></td>
                    <td><?php echo $e[$x]; $x = $x + 1; ?></td>
                    <td><?php echo $e[$x]; $x = $x + 1; ?></td>
                    <td><?php echo $e[$x]; $x = $x + 1;?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        </body>
    </html>
<?php } ?>

<?php 

if (isset($_POST['pseudo'])) {
    $pseudo=$_POST['pseudo'];
    $score=$_POST['score'];
    $spe = $_POST["spe"];
    AjouteGagnant($pseudo,$score,$spe);

}
/*si il n'y a aucun gagnant, on évite l'erreur en gardant toujours au moins un gagnant*/
if(recupGagnant() == 0){
    AjouteGagnant("test",0,"programmation");
}
$e = recupGagnant();
$nb= sizeof($e)/3;
start_classement($e,$nb);
?>