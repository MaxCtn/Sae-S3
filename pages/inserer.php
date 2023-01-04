<?php
$libelle = $_POST["libelle"];
$theme = $_POST["theme"];
$difficulte = $_POST["difficulte"];
$indice = $_POST["indice"];
$explication = $_POST["explication"];
$reponse1 = $_POST["reponse1"];
$bonneRep1 = $_POST["bonneRep1"];
$reponse2 = $_POST["reponse2"];
$bonneRep2 = $_POST["bonneRep2"];
$reponse3 = $_POST["reponse3"];
$bonneRep3 = $_POST["bonneRep3"];
$reponse4 = $_POST["reponse4"];
$bonneRep4 = $_POST["bonneRep4"];
AjouteQuestion($libelle, $theme, $difficulte, $indice, $explication, $reponse1, $bonneRep1, $reponse2, $bonneRep2, $reponse3, $bonneRep3, $reponse4, $bonneRep4);
?>
<!DOCTYPE html>
<html>
    <form action="resultAdmin.php" method="POST">
        <div class="info_mail">
            <div class="nom_prenom">
                <input id="id" name="id" type="hidden" value="Patricia">
            </div>
            <input id="motDePasse" type="hidden" name="motDePasse" value="motdepasse">

        </div>
        <div class="valide_form">
            <input type="submit" name="action" value="Retourner vers Interface Admin" />
        </div>

    </form>

</html>


<?php
function AjouteQuestion($Libelle, $Theme, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryId = mysqli_query($dbLink, "SELECT max(ID_QUESTION) From QUESTION; ");
    $IdQuestion = mysqli_fetch_assoc($queryId);
    $IdQuestion = $IdQuestion["max(ID_QUESTION)"] + 1;

    $queryQuestion = mysqli_prepare($dbLink, 'INSERT Into QUESTION Values (?, ?, ?, ?, ?, ?);');
    mysqli_stmt_bind_param($queryQuestion, "ssssss", $IdQuestion, $Libelle, $Theme, $Difficulte, $Indice, $Explication);
    mysqli_execute($queryQuestion);
    mysqli_stmt_close($queryQuestion);

    //On recupere l'id de la question qu'on vient de créer
    $queryIdQuestion = mysqli_prepare($dbLink, 'SELECT ID_QUESTION From QUESTION Where LIBELLE = ?;');
    mysqli_stmt_bind_param($queryIdQuestion, "s", $Libelle);
    mysqli_execute($queryIdQuestion);
    mysqli_stmt_bind_result($queryIdQuestion, $IdQuestion);
    mysqli_stmt_fetch($queryIdQuestion);
    mysqli_stmt_close($queryIdQuestion);

    AjouteReponse($IdQuestion, $Rep1, $Bon1);
    AjouteReponse($IdQuestion, $Rep2, $Bon2);
    AjouteReponse($IdQuestion, $Rep3, $Bon3);
    AjouteReponse($IdQuestion, $Rep4, $Bon4);
}
?>
<?php
function AjouteReponse($IdQuestion, $Rep, $BonRep)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryReponse = mysqli_prepare($dbLink, 'INSERT Into REPONSE(ID_QUESTION, BONNE_REP, LIBELLE) Values (?, ?, ?);');
    mysqli_stmt_bind_param($queryReponse, "sss", $IdQuestion, $BonRep, $Rep);
    mysqli_execute($queryReponse);
    mysqli_stmt_close($queryReponse);
}
?>