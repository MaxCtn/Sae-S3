/** fonction ouvrant l'overlay et affichant des paragraphes et titres selon le choix réalisé par l'utilisateur*/ 
function setScreen(spe){ 
    document.getElementById('popup_video').style.display='none';
    if(spe == 'web' || spe == 'webMobile'){
        document.getElementById('titre_choix').innerHTML = "Qu'est-ce-que le web ?";
        document.getElementById('p_choix').innerHTML = "Le web, vous y êtes actuellement. Dans le web, on utilise différents langages comme le HTML pour la mise en page, le CSS pour le style graphique ou encore le javascript et le PHP pour rendre le site dynamique. Cette compétence plaira aux plus créatifs.";
    }
    else if(spe == 'reseaux'|| spe == 'reseauxMobile'){
        document.getElementById('titre_choix').innerHTML = "Que sont les réseaux ?";
        document.getElementById('p_choix').innerHTML = "En réseaux vous étudierez la communication entre machines grâce à différents protocoles comme le TCP, l'UDP ou le HTTP. Vous apprendrez aussi à déterminer des adresses IP ou encore comment créer un serveur et un client.";
    }
    else if(spe == 'bd'|| spe == 'bdMobile'){
        document.getElementById('titre_choix').innerHTML = "Que sont les bases de données ?";
        document.getElementById('p_choix').innerHTML = "Les bases de données servent à stocker des données que l'on peut ensuite récupérer et/ou manipuler. Par exemple, vous pourrez concevoir une base de données qui vous servira à établir des statistiques.";
    }
    else if(spe == 'programmation'|| spe == 'programmationMobile'){
        document.getElementById('titre_choix').innerHTML = "Qu'est-ce-que la programmation ?";
        document.getElementById('p_choix').innerHTML = "La programmation consiste à créer des algorithmes. Vous utiliserez de nombreux langages (C++, Python, Java) qui vous permettront de réaliser de nombreux projets.";
    }
    else if(spe == 'jsp'|| spe == 'jspMobile'){
        document.getElementById('titre_choix').innerHTML = "En quoi consiste le but Informatique ?";
        document.getElementById('p_choix').innerHTML = "Le monde de l'informatique vous est inconnu ? Vous êtes complètement perdu et ne savez ce que vous faites là ? Et bien ne vous inquiétez pas, vous êtes au bon endroit ! Voici quelques compétences apprises au cours du cursus : </br> - Les bases de données / sql </br>- Les réseaux </br>- La programmation fonctionnelle / C++ </br>- Le développement orienté objet / Java </br> Vous en apprendrez aussi plus sur l'organisation de votre futur diplôme.";
    }
    else if(spe == 'systeme'|| spe == 'systemeMobile'){
        document.getElementById('titre_choix').innerHTML = "Qu'est-ce-que l'étude des systèmes ?";
        document.getElementById('p_choix').innerHTML = "En système vous apprendrez à vous sentir à l'aise dans un environnement Linux et connaitre ses avantages. Vous apprendrez notamment comment utiliser un terminal, ce qu'est un dual boot ou encore une machine virtuelle.";
    }
    document.getElementById('popup').style.display= 'block';
    document.getElementById('popup').style.animation='slidePopUpIn 1s ease forwards';
    document.getElementById('specialite').innerHTML = spe;
}

/** //fonction affichant la vidéo correspondant à la spécialité choisie*/
function setVideoScreen(){ 
    
    var speList = ['web','programmation','bd','systeme','reseaux'];

    var spe = document.getElementById('specialite').innerHTML;
    document.getElementById('popup').style.display='none';

    /**tirage au sort du thème si la personne ne sait pas quoi prendre*/
    if(spe == 'jsp'|| spe == 'jspMobile'){  
        max = 4;
        min = 0;
        min = Math.ceil(min);
        max = Math.floor(max);
        speRandom = Math.floor(Math.random() * (max - min)) + min;
        spe = speList[speRandom];
    }

    if(spe == 'web' || spe == 'webMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Qu'est-ce-que le web ?";
        document.getElementById('PopupWeb').style.display='block';
        document.getElementById('speChoisie').value='web';

    }
    else if(spe == 'reseaux'|| spe == 'reseauxMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Que sont les réseaux ?";
        document.getElementById('PopupRes').style.display='block'; 
        document.getElementById('speChoisie').value='reseaux';

    }
    else if(spe == 'bd'|| spe == 'bdMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Que sont les bases de données ?";
        document.getElementById('PopupBd').style.display='block';     
        document.getElementById('speChoisie').value='bd';

    }
    else if(spe == 'programmation'|| spe == 'programmationMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Qu'est-ce-que la programmation ?";
        document.getElementById('PopupProg').style.display='block';
        document.getElementById('speChoisie').value='programmation';
    }
    
    else if(spe == 'systeme'|| spe == 'systemeMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Qu'est-ce-que l'étude des systèmes ?";
        document.getElementById('PopupSys').style.display='block';     
        document.getElementById('speChoisie').value='systeme';

    }
    /**permet d'afficher le pop up de vidéo avec une animation */
    document.getElementById('popup_video').style.display='block';
    document.getElementById('popup_video').style.animation='fadein 1s';
}

/** fonction fermant les pop ups avec une animation*/ 
function closeScreen(){ 
    document.getElementById('PopupWeb').style.display='none';
    document.getElementById('PopupRes').style.display='none';
    document.getElementById('PopupBd').style.display='none';
    document.getElementById('PopupProg').style.display='none';
    document.getElementById('PopupSys').style.display='none';
    document.getElementById('popup').style.animation='slidePopUpOut 1s ease forwards';
    setTimeout(() => {document.getElementById('popup').style.display='none'; 
    document.getElementById('popup').style.animation='none'}, 1000);
    document.getElementById('popup_video').style.animation='slidePopUpOut 1s ease forwards';
    setTimeout(() => {document.getElementById('popup_video').style.display='none';
    document.getElementById('popup_video').style.animation='none'}, 1000);
}

/**fonction ouvrant l'overlay de la page formulaire */ 
function formConfirme(){ 
    alert("pas bon")
    document.getElementById('confirmeForm').style.display='flex';
    
}

/** fonction permettant à l'administrateur d'accèder au formulaire supprimer*/
function afficherSupprimer() {
    document.getElementById("formInserer").style.display= "none";
    document.getElementById("formSupprimer").style.display= "initial";
    document.getElementById("formModifier").style.display= "none";
}
/** fonction permettant à l'administrateur d'accèder au formulaire inserer*/
function afficherInserer() {
    document.getElementById("formSupprimer").style.display= "none";
    document.getElementById("formInserer").style.display= "initial";
    document.getElementById("formModifier").style.display= "none";
}
function afficherModifier() {
    document.getElementById("formSupprimer").style.display= "none";
    document.getElementById("formInserer").style.display= "none";
    document.getElementById("formModifier").style.display= "initial";

}