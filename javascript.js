function setScreen(spe){ // fonction ouvrant l'overlay et affichant des paragraphes et titres selon le choix réalisé par l'utilisateur
    if(spe == 'web'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que le web ?";
        document.getElementById('p_choix').innerHTML = "Le web, bah vous y êtes actuellement. Dans le web, on utilise différents langages comme le HTML pour la mise en page, le CSS pour le style graphique ou encore le javascript et le PHP pour rendre le site dynamique. Cette compétence plaira aux plus créatifs.";
    }
    if(spe == 'reseaux'){
        document.getElementById('titre_choix').innerHTML = "Que sont les réseaux ?";
        document.getElementById('p_choix').innerHTML = "En réseaux vous étudierez la communication entre machines grâce à différents protocoles comme le TCP, l'UDP où le HTTP. Vous apprendrez aussi à déterminer des adresses IP ou encore comment créer un serveur et un client.";
    }
    if(spe == 'bd'){
        document.getElementById('titre_choix').innerHTML = "Que sont les bases de données ?";
        document.getElementById('p_choix').innerHTML = "Les bases de données servent à stocker des données que l'on peut ensuite récupérer et/ou manipuler. Par exemple, vous pourrez concevoir une base de données qui vous servira à établir des statistiques.";
    }
    if(spe == 'algo'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que la programmation ?";
        document.getElementById('p_choix').innerHTML = "La programmation consiste à créer des algorithmes, suites d'instructions ayant un but. Vous utiliserez de nombreux langages (C++, Python, Java) qui vous permettront de raliser de nombreux projets.";
    }
    if(spe == 'jsp'){
        document.getElementById('titre_choix').innerHTML = "En quoi consiste le but Informatique ?";
        document.getElementById('p_choix').innerHTML = "Le monde de l'informatique vous est inconnu ? Vous êtes complètement perdu et ne savez ce que vous faites là (nan sérieux ?) et bien ne vous inquiétez pas, vous êtes au bon endroit ! Ici les questions seront plus générales et vous permettront de vous donner une idée globale de ce qu'il se fait ici. Voici quelques compétences apprises au cours du cursus : </br> - Les bases de données / sql </br>- Les réseaux </br>- La programmation fonctionnelle / C++ </br>- Le développement orienté objet / Java </br> Vous en apprendrez aussi plus sur l'organisation de votre futur diplôme.";
    }
    if(spe == 'systeme'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que l'étude des systèmes ?";
        document.getElementById('p_choix').innerHTML = "En système vous apprendrez à vous sentir à l'aise dans un environnement Linux et connaitre ses avantages. Vous apprendrez notamment comment utiliser un terminal, ce qu'est un dual boot ou encore une machine virtuelle.";
    }
    document.getElementById('popup').style.display='block';
}

function closeScreen(){ // fonction fermant l'overlay (page choix spe)
    document.getElementById('popup').style.display='none';
}

function formConfirme(){ // fonction ouvrant l'overlay (page formulaire)
    document.getElementById('confirmeForm').style.display='flex';
}

const question={
    question : "Cliquez sur oui",
    reponsePossible : ["non","non","oui","non"],
    bonneReponse : "oui"
};

function reponseQuestion(idRep){ // fonction gestion des la couleur des boutons selectionnés
    var colBout1 = document.getElementById('rep1').style.backgroundColor;
    var colBout2 = document.getElementById('rep2').style.backgroundColor;
    var colBout3 = document.getElementById('rep3').style.backgroundColor;
    var colBout4 = document.getElementById('rep4').style.backgroundColor;
    var couleurBoutons = [colBout1,colBout2,colBout3,colBout4];

    var s = document.getElementById(idRep).style.backgroundColor;
    if(s == "rgb(0, 183, 233)"){
        if(colBout1 == "rgb(255, 165, 0)")
            document.getElementById('rep1').style.backgroundColor='#00B7E9';
        if(colBout2 == "rgb(255, 165, 0)")
            document.getElementById('rep2').style.backgroundColor='#00B7E9';
        if(colBout3 == "rgb(255, 165, 0)")
            document.getElementById('rep3').style.backgroundColor='#00B7E9';
        if(colBout4 == "rgb(255, 165, 0)")
            document.getElementById('rep4').style.backgroundColor='#00B7E9';
        document.getElementById(idRep).style.backgroundColor='#FFA500'; 
    }
    else if(s == "rgb(255, 165, 0)"){
        document.getElementById(idRep).style.backgroundColor='#00B7E9';
    }
}

function valideReponse(){  // fonction gérant la réponse validée par l'utilisateur
    var colBout1 = document.getElementById('rep1').style.backgroundColor;
    var colBout2 = document.getElementById('rep2').style.backgroundColor;
    var colBout3 = document.getElementById('rep3').style.backgroundColor;
    var colBout4 = document.getElementById('rep4').style.backgroundColor;
    var couleurBoutons = [colBout1,colBout2,colBout3,colBout4];
    
    var stringRep;

    if(colBout1 == "rgb(255, 165, 0)")
            stringRep = document.getElementById('rep1').innerHTML;
    if(colBout2 == "rgb(255, 165, 0)")
            stringRep = document.getElementById('rep2').innerHTML;
    if(colBout3 == "rgb(255, 165, 0)")
            stringRep = document.getElementById('rep3').innerHTML;
    if(colBout4 == "rgb(255, 165, 0)")
            stringRep = document.getElementById('rep4').innerHTML;
    return stringRep; 
}

function resultatReponse(idRep){
    stringRep = valideReponse();
    if(stringRep == "oui"){
        document.getElementById('rep2').style.backgroundColor = 'green';
    }
    else if(stringRep == "non"){
        document.getElementById('rep2').style.backgroundColor = 'green';
        document.getElementById('rep1').style.backgroundColor = 'red';
        document.getElementById('rep3').style.backgroundColor = 'red';
        document.getElementById('rep4').style.backgroundColor = 'red';
    }
}