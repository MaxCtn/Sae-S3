<?php
$id = $_POST["id"];
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
VerifArguments($id, $libelle, $theme, $difficulte, $indice, $explication, $reponse1, $bonneRep1, $reponse2, $bonneRep2, $reponse3, $bonneRep3, $reponse4, $bonneRep4);
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
function ModifieQuestion($Id, $Libelle, $Theme, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    
    $queryReponse = mysqli_prepare($dbLink, 'UPDATE `QUESTION` SET `LIBELLE`=?,`THEME`=?,`DIFFICULTE`=?,`INDICE`=?,`EXPLICATION`=? WHERE ID_QUESTION=?;');
    mysqli_stmt_bind_param($queryReponse, "ssssss", $Libelle, $Theme, $Difficulte, $Indice, $Explication, $Id);
    mysqli_execute($queryReponse);
    mysqli_stmt_close($queryReponse);

    ModifieReponse($Id, $Rep1, $Bon1, 0);
    ModifieReponse($Id, $Rep2, $Bon2, 1);
    ModifieReponse($Id, $Rep3, $Bon3, 2);
    ModifieReponse($Id, $Rep4, $Bon4, 3);
}
?>
<?php
function ModifieReponse($IdQuestion, $Rep, $BonRep, $ligne)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryReponse = mysqli_prepare($dbLink, 'UPDATE `REPONSE` SET `BONNE_REP`= ?,`LIBELLE`= ? WHERE ID_REP = (Select ID_REP FROM REPONSE WHERE ID_QUESTION = ? LIMIT 1 OFFSET ?);');
    mysqli_stmt_bind_param($queryReponse, "ssss", $BonRep, $Rep, $IdQuestion, $ligne);
    mysqli_execute($queryReponse);
    mysqli_stmt_close($queryReponse);
}
?>
<?php 
function VerifArguments($Id, $Libelle, $Theme, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4)
{
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net", "286642", "ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'quizzbutinfoaix_bd') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $test = $Id != null or die('Id de la question a modifier obligatoire');

    if ($Libelle == null) {
        $query = mysqli_prepare($dbLink, 'SELECT LIBELLE From QUESTION Where ID_QUESTION = ?;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Libelle);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Theme == null) {
        $query = mysqli_prepare($dbLink, 'SELECT THEME From QUESTION Where ID_QUESTION = ?;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Theme);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Difficulte == null) {
        $query = mysqli_prepare($dbLink, 'SELECT DIFFICULTE From QUESTION Where ID_QUESTION = ?;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Difficulte);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Indice == null) {
        $query = mysqli_prepare($dbLink, 'SELECT INDICE From QUESTION Where ID_QUESTION = ?;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Indice);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Explication == null) {
        $query = mysqli_prepare($dbLink, 'SELECT EXPLICATION From QUESTION Where ID_QUESTION = ?;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Explication);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }


    if ($Rep1 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT LIBELLE From REPONSE Where ID_QUESTION = ? LIMIT 1;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Rep1);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Bon1 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT BONNE_REP From REPONSE Where ID_QUESTION = ? LIMIT 1;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Bon1);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }

    if ($Rep2 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT LIBELLE From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 1;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Rep2);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Bon2 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT BONNE_REP From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 1;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Bon2);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }

    if ($Rep3 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT LIBELLE From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 2;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Rep3);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Bon3 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT BONNE_REP From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 2;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Bon3);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }

    if ($Rep4 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT LIBELLE From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 3;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Rep4);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }
    if ($Bon4 == null) {
        $query = mysqli_prepare($dbLink, 'SELECT BONNE_REP From REPONSE Where ID_QUESTION = ? LIMIT 1 OFFSET 3;');
        mysqli_stmt_bind_param($query, "s", $Id);
        mysqli_execute($query);
        mysqli_stmt_bind_result($query, $Bon4);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
    }

    ModifieQuestion($Id, $Libelle, $Theme, $Difficulte, $Indice, $Explication, $Rep1, $Bon1, $Rep2, $Bon2, $Rep3, $Bon3, $Rep4, $Bon4);

}