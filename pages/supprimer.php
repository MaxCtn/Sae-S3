<?php
    $Id = $_POST["idQuestion"];
    supprimeQuestion($Id);
    //header("Location : https://quizzbutinfoaix.alwaysdata.net/pages/admin.php");
    
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
function supprimeQuestion($ID_QUESTION) {
    $dbLink = mysqli_connect("mysql-quizzbutinfoaix.alwaysdata.net","286642","ButInformatiqueBD") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'quizzbutinfoaix_bd')or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $queryRep = mysqli_prepare($dbLink, 'DELETE FROM REPONSE Where ID_QUESTION = ?;');
    mysqli_stmt_bind_param($queryRep, 'i', $ID_QUESTION);
    mysqli_execute($queryRep);
    mysqli_stmt_close($queryRep);
    
    $queryQ = mysqli_prepare($dbLink, 'DELETE FROM QUESTION Where ID_QUESTION = ?;');
    mysqli_stmt_bind_param($queryQ, 'i', $ID_QUESTION);
    mysqli_execute($queryQ);
    mysqli_stmt_close($queryQ);
}
?>