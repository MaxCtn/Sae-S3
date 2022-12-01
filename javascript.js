function setScreen(spe){ // fonction ouvrant l'overlay et affichant des paragraphes et titres selon le choix réalisé par l'utilisateur
    document.getElementById('popup_video').style.display='none';
    if(spe == 'web' || spe == 'webMobile'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que le web ?";
        document.getElementById('p_choix').innerHTML = "Le web, bah vous y êtes actuellement. Dans le web, on utilise différents langages comme le HTML pour la mise en page, le CSS pour le style graphique ou encore le javascript et le PHP pour rendre le site dynamique. Cette compétence plaira aux plus créatifs.";
    }
    if(spe == 'reseaux'|| spe == 'reseauxMobile'){
        document.getElementById('titre_choix').innerHTML = "Que sont les réseaux ?";
        document.getElementById('p_choix').innerHTML = "En réseaux vous étudierez la communication entre machines grâce à différents protocoles comme le TCP, l'UDP où le HTTP. Vous apprendrez aussi à déterminer des adresses IP ou encore comment créer un serveur et un client.";
    }
    if(spe == 'bd'|| spe == 'bdMobile'){
        document.getElementById('titre_choix').innerHTML = "Que sont les bases de données ?";
        document.getElementById('p_choix').innerHTML = "Les bases de données servent à stocker des données que l'on peut ensuite récupérer et/ou manipuler. Par exemple, vous pourrez concevoir une base de données qui vous servira à établir des statistiques.";
    }
    if(spe == 'algo'|| spe == 'algoMobile'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que la programmation ?";
        document.getElementById('p_choix').innerHTML = "La programmation consiste à créer des algorithmes, suites d'instructions ayant un but. Vous utiliserez de nombreux langages (C++, Python, Java) qui vous permettront de raliser de nombreux projets.";
    }
    if(spe == 'jsp'|| spe == 'jspMobile'){
        document.getElementById('titre_choix').innerHTML = "En quoi consiste le but Informatique ?";
        document.getElementById('p_choix').innerHTML = "Le monde de l'informatique vous est inconnu ? Vous êtes complètement perdu et ne savez ce que vous faites là (nan sérieux ?) et bien ne vous inquiétez pas, vous êtes au bon endroit ! Ici les questions seront plus générales et vous permettront de vous donner une idée globale de ce qu'il se fait ici. Voici quelques compétences apprises au cours du cursus : </br> - Les bases de données / sql </br>- Les réseaux </br>- La programmation fonctionnelle / C++ </br>- Le développement orienté objet / Java </br> Vous en apprendrez aussi plus sur l'organisation de votre futur diplôme.";
    }
    if(spe == 'systeme'|| spe == 'systemeMobile'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que l'étude des systèmes ?";
        document.getElementById('p_choix').innerHTML = "En système vous apprendrez à vous sentir à l'aise dans un environnement Linux et connaitre ses avantages. Vous apprendrez notamment comment utiliser un terminal, ce qu'est un dual boot ou encore une machine virtuelle.";
    }
    document.getElementById('popup').style.display= 'block';
    document.getElementById('popup').style.animation='slidePopUpIn 1s ease forwards';
    document.getElementById('specialite').innerHTML = spe;
}


function setVideoScreen(){
    //tirage au sort du thème si la personne ne sait pas quoi prendre
    max = 4;
    min = 0;
    min = Math.ceil(min);
    max = Math.floor(max);
    speRandom = Math.floor(Math.random() * (max - min)) + min;

    var speList = ['PopupRes','PopupWeb','PopupBd','PopupSys','PopupProg'];
    var spe = document.getElementById('specialite').innerHTML;
    document.getElementById('popup').style.display='none';

    if(spe == 'web' || spe == 'webMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Qu'est ce que le web ?";
        document.getElementById('PopupWeb').style.display='block';
    }
    if(spe == 'reseaux'|| spe == 'reseauxMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Que sont les réseaux ?";
        document.getElementById('PopupRes').style.display='block';
    }
    if(spe == 'bd'|| spe == 'bdMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Que sont les bases de données ?";
        document.getElementById('PopupBd').style.display='block';
    }
    if(spe == 'algo'|| spe == 'algoMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Qu'est ce que la programmation ?";
        document.getElementById('PopupProg').style.display='block';
    }
    if(spe == 'jsp'|| spe == 'jspMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "En quoi consiste le but Informatique ?";
        document.getElementById(speList[speRandom]).style.display='block';
    }
    if(spe == 'systeme'|| spe == 'systemeMobile'){
        document.getElementById('titre_choixVideo').innerHTML = "Qu'est ce que l'étude des systèmes ?";
        document.getElementById('PopupSys').style.display='block';
    }
    document.getElementById('popup_video').style.display='block';
    document.getElementById('popup_video').style.animation='fadein 1s';
   

}


function closeScreen(){ // fonction fermant l'overlay (page choix spe)
    document.getElementById('PopupWeb').style.display='none';
    document.getElementById('PopupRes').style.display='none';
    document.getElementById('PopupBd').style.display='none';
    document.getElementById('PopupProg').style.display='none';
    document.getElementById('PopupJsp').style.display='none';
    document.getElementById('PopupSys').style.display='none';
    document.getElementById('popup').style.animation='slidePopUpOut 1s ease forwards';
    setTimeout(() => {document.getElementById('popup').style.display='none'; 
    document.getElementById('popup').style.animation='none'}, 1000);
    document.getElementById('popup_video').style.animation='slidePopUpOut 1s ease forwards';
    setTimeout(() => {document.getElementById('popup_video').style.display='none';
    document.getElementById('popup_video').style.animation='none'}, 1000);
}



function formConfirme(){ // fonction ouvrant l'overlay (page formulaire)
    alert("pas bon")
    document.getElementById('confirmeForm').style.display='flex';
    
}



//permet à l'admin d'accèder au formulaire supprimer
function afficherSupprimer() {
    document.getElementById("formInserer").style.display= "none";
    document.getElementById("formSupprimer").style.display= "initial";

}
//permet à l'admin d'accèder au formulaire insérer
function afficherInserer() {
    document.getElementById("formSupprimer").style.display= "none";

    document.getElementById("formInserer").style.display= "initial";

}