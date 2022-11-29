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
    alert("pas bon")
    document.getElementById('confirmeForm').style.display='flex';
    
}


function gestionReponseSelectionne(idBoiteRep){ // fonction gestion des la couleur des boutons selectionnés
    var colBout1 = document.getElementById('rep1').style.backgroundColor;
    var colBout2 = document.getElementById('rep2').style.backgroundColor;
    var colBout3 = document.getElementById('rep3').style.backgroundColor;
    var colBout4 = document.getElementById('rep4').style.backgroundColor;
    var couleurBoutons = [colBout1,colBout2,colBout3,colBout4];

    var s = document.getElementById(idBoiteRep).style.backgroundColor;
    if(s == "rgb(0, 183, 233)"){
        if(colBout1 == "rgb(255, 165, 0)")
            document.getElementById('rep1').style.backgroundColor='#00B7E9';
        if(colBout2 == "rgb(255, 165, 0)")
            document.getElementById('rep2').style.backgroundColor='#00B7E9';
        if(colBout3 == "rgb(255, 165, 0)")
            document.getElementById('rep3').style.backgroundColor='#00B7E9';
        if(colBout4 == "rgb(255, 165, 0)")
            document.getElementById('rep4').style.backgroundColor='#00B7E9';
        document.getElementById(idBoiteRep).style.backgroundColor='#FFA500'; 
    }
    else if(s == "rgb(255, 165, 0)"){
        document.getElementById(idBoiteRep).style.backgroundColor='#00B7E9';
    }
}


function valideReponse(){  
    // fonction gérant la réponse validée par l'utilisateur
    var colBout1 = document.getElementById('rep1').style.backgroundColor;
    var colBout2 = document.getElementById('rep2').style.backgroundColor;
    var colBout3 = document.getElementById('rep3').style.backgroundColor;
    var colBout4 = document.getElementById('rep4').style.backgroundColor;

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
//
function changeAideQuestion(aides, indiceRep){  // fonction gérant la réponse validée par l'utilisateur
    aideQuestion = aides[indiceRep];
    //alert(aideQuestion);
    document.getElementById('chatBot').innerHTML = aideQuestion;
}


function shuffle(a)
{
   var j = 0;
   var valI = '';
   var valJ = valI;
   var l = a.length - 1;
   while(l > -1)
   {
		j = Math.floor(Math.random() * l);
		valI = a[l];
		valJ = a[j];
		a[l] = valJ;
		a[j] = valI;
		l = l - 1;
	}
	return a;
 }

function attribueQuestions() { //fonction renvoyant la liste des questions


    var questions = [['Quelle est l’objectif d’une saé?','Mettre en pratique les connaissances liées à une compétence',
    'bon','Savoir réaliser un projet en autonomie complète',
    'mauvais','Acquérir un grand nombre de connaissance théorique','mauvais','Donner les connaissances nécessaires a la création d une entreprise','mauvais','c est un projet collaboratif',
    ],

    ['Dans le But, une ressource correspond à ','une matière','bon','des références','mauvais','un cours magistral ',
    'mauvais','une documentation','mauvais','Elle fait l objet de partiels',
    ],


    ['Un ORE peut s apparenter à','une aide aux devoir','mauvais',
    'intervenir auprès des premières années ','mauvais','un exercice de prise de parole à l oral ',
    'mauvais','non3','bon','on s en sert nottament pour s entrainer avant un partiel' ],
   
   
    ['question 4','oui4','bon','non4','mauvais','non4','mauvais','non4','mauvais','caca']]; 
   
    return questions;
}



function cliqueSurValider(bonRep) { //fonction permettant de valider la réponse sélectionnée
    var stringRep = valideReponse();
    if(stringRep == bonRep){

        if (document.getElementById('rep1').innerHTML == bonRep) {
            document.getElementById('rep1').style.backgroundColor = 'green';
        }
         else if (document.getElementById('rep2').innerHTML == bonRep) {
            document.getElementById('rep2').style.backgroundColor = 'green';
        }
        else if (document.getElementById('rep3').innerHTML == bonRep) {
            document.getElementById('rep3').style.backgroundColor = 'green';
        }
        else if (document.getElementById('rep4').innerHTML == bonRep) {
            document.getElementById('rep4').style.backgroundColor = 'green';            
                
        }
    }
    else {
        document.getElementById('rep2').style.backgroundColor = 'red';
        document.getElementById('rep1').style.backgroundColor = 'red';
        document.getElementById('rep3').style.backgroundColor = 'red';
        document.getElementById('rep4').style.backgroundColor = 'red';
        for(let numRep = 1; numRep < 5; ++numRep) {
            if(document.getElementById('rep' + numRep.toString()).innerHTML == bonRep) {
                document.getElementById('rep' + numRep.toString()).style.backgroundColor = 'green';
            }
                
        }
    }
        
    document.getElementById('soumettre').innerHTML ="Continuer";
}

//
function reinitialiseBoutons(aides,questions,indiceRep) { //fonction remettant les boutons a la même couleur,
    // incremente le numero de la question, remet le bot a zero
    document.getElementById('rep1').style.backgroundColor = '#00B7E9';
    document.getElementById('rep2').style.backgroundColor = '#00B7E9';
    document.getElementById('rep3').style.backgroundColor = '#00B7E9';
    document.getElementById('rep4').style.backgroundColor = '#00B7E9';
    document.getElementById('soumettre').innerHTML ="Valider";

    document.getElementById('questionPosee').innerHTML = questions[indiceRep][0];
    document.getElementById('rep1').innerHTML = questions[indiceRep][1];
    document.getElementById('rep2').innerHTML = questions[indiceRep][3];
    document.getElementById('rep3').innerHTML = questions[indiceRep][5];
    document.getElementById('rep4').innerHTML = questions[indiceRep][7];
    //changeQuestionReponse();
    document.getElementById('num').innerHTML = parseInt(document.getElementById('num').innerHTML) + 1;

    fermerBot();
    changeAideQuestion(aides,indiceRep);
    ouvrirBot();
}


function cliqueValiderOuContinuer(idBoiteRep){ //fonction qui charge les questions, les indices, permet de savoir si on a répondu 
    //et si on veut continuer    
    var questions = attribueQuestions();
    let indiceRep =  parseInt(document.getElementById('num').innerHTML);
    var aides = ['c est un projet collaboratif','Elle fait l objet de partiels',
    'on s en sert nottament pour s entrainer avant un partiel','caca']

 

    

    var bonRep = "oui"; //pour la premiere question
    var aideQuestion; //aide affichée dans le chatBot

    var indiceBonRep;
    if (indiceRep > 0) {
        for(let i = 1; i<9; ++i) {
            if(questions[indiceRep-1][i] == 'bon') {
                indiceBonRep = i -1;
            }
        }
        bonRep = questions[indiceRep-1][indiceBonRep];
    }

    if (document.getElementById('soumettre').innerHTML == "Valider") {
        cliqueSurValider(bonRep);
    } 
    else {
        reinitialiseBoutons(aides,questions,indiceRep);        //remet a zero, change question()
    }  
}




//Partie permettant l'ouverture et la fermeture de l'onglet du bot d'aide
let chat = false;
function fermerBot() {
        document.getElementById("logoBouttonBotHaut").style.display = "initial";
        document.getElementById("logoBouttonBotBas").style.display = "none";
        document.getElementById("chatBot").style.height -= 100 + "px";
        document.getElementById("aideBot").style.top = 92 + "%";
        chat = false;
}



function ouvrirBot() {
    setTimeout(function(){
        chat = true;
        document.getElementById("logoBouttonBotHaut").style.display = "none";
        document.getElementById("logoBouttonBotBas").style.display = "initial"; 
        document.getElementById("chatBot").style.height += 100 + "px";
        document.getElementById("aideBot").style.top = 75 + "%";
    }, 5000);
    
}

//ouvre ou ferme le bot selon la situation actuelle du bot
function ouvrirFermerBot () {
    if (chat === true){
        fermerBot();
    }else{
        ouvrirBot();
    }
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