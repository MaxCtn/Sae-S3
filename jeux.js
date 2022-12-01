var questions = attribueQuestions();
var aides = [questions[0][9],questions[1][9],questions[2][9],
    questions[3][9]];







class Question  { //la classe Question a un enoncé, 4 reponses possibles bonnes ou mauvaises et une aide pour la question
    constructor(enonce, reponseUn,bonOuMauvaisUn,reponseDeux,bonOuMauvaisDeux,reponseTrois,
        bonOuMauvaisTrois,reponseQuatre,bonOuMauvaisQuatre,aideQuestion) {
        this.enonce=enonce;

        this.reponseUn = reponseUn;
        this.bonOuMauvaisUn=bonOuMauvaisUn;

        this.reponseDeux = reponseDeux;
        this.bonOuMauvaisDeux=bonOuMauvaisDeux;

        this.reponseTrois = reponseTrois;
        this.bonOuMauvaisTrois=bonOuMauvaisTrois;

        this.reponseQuatre= reponseQuatre;
        this.bonOuMauvaisQuatre=bonOuMauvaisQuatre;

        this.aideQuestion=aideQuestion;


      }
}

class Quizz { //la classe Quizz comporte, 4 listes de questions(2 de thème général et 2 de thème choisi comme spécialité)
    constructor(questionsGeneraleUn,questionsGeneraleDeux,questionsSpeUn,questionsSpeDeux) {
        this.questionsGeneraleUn=questionsGeneraleUn;
        this.questionsGeneraleDeux=questionsGeneraleDeux;
        this.questionsSpeUn=this.questionsSpeUn;
        this.questionsSpeDeux=this.questionsSpeDeux;

    }
    
}


const ques = new Question('Quelle est l’objectif d’une saé?','Mettre en pratique les connaissances liées à une compétence',
'bon','Savoir réaliser un projet en autonomie complète','mauvais','Acquérir un grand nombre de connaissance théorique',
'mauvais','Donner les connaissances nécessaires a la création d une entreprise','mauvais','c est un projet collaboratif');

const ques2 = new Question('Dans le But, une ressource correspond à ','une matière','bon','des références','mauvais','un cours magistral ',
'mauvais','une documentation','mauvais','Elle fait l objet de partiels');

lUn=[ques,ques2];
lDeux=[ques,ques2];
lSUn=[ques,ques2];
lSDeux=[ques,ques2];

const quizzUn = new Quizz(lUn,lDeux,lSUn,lSDeux);
alert(quizzUn.questionsGeneraleUn[0].enonce);




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
    'mauvais','Acquérir un grand nombre de connaissance théorique','mauvais','Donner les connaissances nécessaires a la création d une entreprise','mauvais','c est un projet collaboratif'
    ],

    ['Dans le But, une ressource correspond à ','une matière','bon','des références','mauvais','un cours magistral ',
    'mauvais','une documentation','mauvais','Elle fait l objet de partiels'
    ],


    ['Un ORE peut s apparenter à','une aide aux devoir','mauvais',
    'intervenir auprès des premières années ','mauvais','un exercice de prise de parole à l oral ',
    'mauvais','un cours supplémentaire facultatif ou non','bon','on s en sert nottament pour s entrainer avant un partiel' ],
   
   
    ['qu\'est ce qu\'un cm?','cours magistral ','bon','cours magique','mauvais','cours moyen',
    'mauvais','cours moral ','mauvais','Une CM est un cours rassemblant toute une promotion']]; 
   
    return shuffle(questions);
}



function cliqueSurValider(bonRep, indiceRep) { //fonction permettant de valider la réponse sélectionnée
    
    // on aura besoin de changer la couleur du plan
    let plan = document.querySelector('#plan');
    
    var stringRep = valideReponse();
    if(stringRep == bonRep){

        //coloration du plan
        if (indiceRep >= 1){ //car indice 0 correspond au didactitiel
            let section = 'th[class="section' + indiceRep + '"]';
            plan.querySelectorAll(section).forEach(
                function (currentValue) {
                currentValue.style.backgroundColor = 'green';
                }
            );
        }

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

        //coloration du plan
        if (indiceRep >= 1){ //car indice 0 correspond au didactitiel
            let section = 'th[class="section' + indiceRep + '"]';
            plan.querySelectorAll(section).forEach(
                function (currentValue) {
                currentValue.style.backgroundColor = 'red';
                }
            );
        }

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
    
    //coloration de la case sur laquelle est le joueur
    if (indiceRep >= 1){ //car indice 0 correspond au didactitiel
        let section = 'th[class="section' + (indiceRep+1) + '"]';
        plan.querySelectorAll(section).forEach(
            function (currentValue) {
            currentValue.style.backgroundColor = '#00B7E975';
        }
        );
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
    //var questions = attribueQuestions();
    let indiceRep =  parseInt(document.getElementById('num').innerHTML);
    

 

    

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
        cliqueSurValider(bonRep, indiceRep);
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
        document.getElementById("aideBot").style.top = 81 + "%";
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

