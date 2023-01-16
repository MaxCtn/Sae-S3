/** Nos variables globales */

var listeQuestionsSpeUn;
var listeQuestionsSpeDeux;

var listeQuestionsGeneralesUn;
var listeQuestionsGeneralesDeux;

var quizz;
var aides;
var explications;
var questions;

/** variable permettant l'ouverture et la fermeture de l'onglet du bot d'aide */
var chat = false;

/* Nos classes */

/** la classe Question a un enoncé, 4 reponses possibles bonnes ou mauvaises et une aide pour la question */
class Question  { 
    /** @constructor 
    * @param {string} enonce - enonce de la question
    * @param {string} reponseUn - reponse 1 de la question 
    * @param {string} bonOuMauvaisUn - si la reponse 1 est juste ou non
    * @param {string} reponseDeux - reponse 2 de la question
    * @param {string} bonOuMauvaisUn - si la reponse 2 est juste ou non
    * @param {string} reponseDeux - reponse 2 de la question
    * @param {string} bonOuMauvaisUn - si la reponse 2 est juste ou non
    * @param {string} reponseTrois - reponse 3 de la question
    * @param {string} bonOuMauvaisTrois - si la reponse 3 est juste ou non
    * @param {string} reponseQuatre - reponse 4 de la question
    * @param {string} bonOuMauvaisQuatre - si la reponse 4 est juste ou non
    * @param {string} aideQuestion - aide de la question -
    * @param {string} explication - explication de la réponse juste -
    */
    constructor(enonce, reponseUn,bonOuMauvaisUn,reponseDeux,bonOuMauvaisDeux,reponseTrois,bonOuMauvaisTrois,reponseQuatre,bonOuMauvaisQuatre,aideQuestion,explication) {
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
        this.explication=explication;

      }
}

/** la classe Quizz comporte, 4 listes de questions(2 de thème général et 2 de thème choisi comme spécialité) */
class Quizz { 
    /** @constructor 
    *   @param {Question[]} questionsGeneraleUn - liste de questions generales niveau 1
    *   @param {Question[]} questionsGeneraleDeux - liste de questions generales niveau 2
    *   @param {Question[]} questionsSpeUn - liste de questions de spécialité niveau 1
    *   @param {Question[]} questionsSpeDeux - liste de questions de spécialité niveau 2
    */
    constructor(questionsGeneraleUn,questionsGeneraleDeux,questionsSpeUn,questionsSpeDeux) {
        this.questionsGeneraleUn=questionsGeneraleUn;
        this.questionsGeneraleDeux=questionsGeneraleDeux;
        this.questionsSpeUn=questionsSpeUn;
        this.questionsSpeDeux=questionsSpeDeux;

    }
}

/** Nos fonctions */

/** fonction coloriant le bouton contenant la reponse juste */
function colorieReponseJuste(version,reponseJuste) {
    if(version == "mobile") {
        if (document.getElementById('rep1Mobile').innerHTML == reponseJuste) {
            document.getElementById('rep1Mobile').style.backgroundColor = 'green';
        }
         else if (document.getElementById('rep2Mobile').innerHTML == reponseJuste) {
            document.getElementById('rep2Mobile').style.backgroundColor = 'green';
        }
        else if (document.getElementById('rep3Mobile').innerHTML == reponseJuste) {
            document.getElementById('rep3Mobile').style.backgroundColor = 'green';
        }
        else if (document.getElementById('rep4Mobile').innerHTML == reponseJuste) {
            document.getElementById('rep4Mobile').style.backgroundColor = 'green';                           
        }
    } 
    else if(version == "ordinateur") {
        if (document.getElementById('rep1').innerHTML == reponseJuste) {
            document.getElementById('rep1').style.backgroundColor = 'green';
        }
         else if (document.getElementById('rep2').innerHTML == reponseJuste) {
            document.getElementById('rep2').style.backgroundColor = 'green';
        }
        else if (document.getElementById('rep3').innerHTML == reponseJuste) {
            document.getElementById('rep3').style.backgroundColor = 'green';
        }
        else if (document.getElementById('rep4').innerHTML == reponseJuste) {
            document.getElementById('rep4').style.backgroundColor = 'green';                   
        }
    }  
    
}

/** fonction coloriant le plan selon la nécessité */
function coloriePlan(plan,coloriage,indiceRep) {
    if(coloriage == "vert") {
        let section = 'th[class="section' + indiceRep + '"]';
        plan.querySelectorAll(section).forEach(
            function (currentValue) {
                currentValue.style.backgroundColor = 'green';
            }
        );
    }
    else if(coloriage == "rouge") {
        let section = 'th[class="section' + indiceRep + '"]';
            plan.querySelectorAll(section).forEach(
                function (currentValue) {
                currentValue.style.backgroundColor = 'red';
                }
            );
    }
    else {
        let section = 'th[class="section' + (indiceRep+1) + '"]';
        plan.querySelectorAll(section).forEach(
            function (currentValue) {
            currentValue.style.backgroundColor = '#00B7E975';
            }
        );
    }
}

/** fonction affichant le pop up du niveau supérieur lorsque le joueur a repondu à la cinquième question */
function affichagePopupNiveauSuperieur(version) {
    let specialite='specialite';
    if(version == 'mobile'){
        specialite = 'specialiteMobile';
    }
    document.getElementById('popup_video').style.display = 'block';
    if(document.getElementById(specialite).innerHTML == "programmation"){
        document.getElementById('titre_choixVideo').innerHTML = "La programmation : niveau supérieur";
        document.getElementById('PopupProg').style.display = 'block';
        fermerBot();    
    }
    if(document.getElementById(specialite).innerHTML == "reseaux"){
        document.getElementById('titre_choixVideo').innerHTML = "Le réseau : niveau supérieur";
        document.getElementById('PopupRes').style.display = 'block';
        fermerBot(); 
    }
    if(document.getElementById(specialite).innerHTML == "web"){
        document.getElementById('titre_choixVideo').innerHTML = "Le web : niveau supérieur";
        document.getElementById('PopupWeb').style.display = 'block';
        fermerBot();    
    }
    if(document.getElementById(specialite).innerHTML == "bd"){
        document.getElementById('titre_choixVideo').innerHTML = "Les base de données : niveau supérieur";
        document.getElementById('PopupBd').style.display = 'block';
        fermerBot();    
    }
    if(document.getElementById(specialite).innerHTML == "systeme"){
        document.getElementById('titre_choixVideo').innerHTML = "Les systèmes : niveau supérieur";
        document.getElementById('PopupSys').style.display = 'block';
        fermerBot();    
    }
}

/** fonction  gérant la réponse sélectionnée par l'utilisateur avant validation */
function gestionReponseSelectionne(idBoiteRep){
    var colBout1 = document.getElementById('rep1').style.backgroundColor;
    var colBout2 = document.getElementById('rep2').style.backgroundColor;
    var colBout3 = document.getElementById('rep3').style.backgroundColor;
    var colBout4 = document.getElementById('rep4').style.backgroundColor;
    var style = document.getElementById(idBoiteRep).style.backgroundColor;

    if(style == "rgb(0, 183, 233)"){
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
    else if(style == "rgb(255, 165, 0)"){
        document.getElementById(idBoiteRep).style.backgroundColor='#00B7E9';
    }
}

/** fonction gérant la réponse validée par l'utilisateur*/
function valideReponse(){  
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

/** fonction permettant de mettre jour l'aide contextuelle après la question précédente */ 
function changeAideQuestion(aides, indiceRep){ 
    let aideQuestion = aides[indiceRep];
    document.getElementById('chatBot').innerHTML = aideQuestion;
    document.getElementById('chatBotMobile').innerHTML = aideQuestion;
}

/** fonction permettant de mettre jour l'explication dans le chat du bot */ 
function changeExplicationQuestion(explications, indiceRep){ 
    let explicationQuestion = explications[indiceRep];
    document.getElementById('chatBot').innerHTML = explicationQuestion;
    document.getElementById('chatBotMobile').innerHTML = explicationQuestion;
}

/** fonction fermant le pop up de la vidéo après la question 5 */
function closeScreenJeux() {
    document.getElementById('popup_video').style='none';
}

/** fonction permettant de mettre à jour la couleur des boutons et le plan selon la réponse validée, on incrémente aussi le score si besoin */
function cliqueSurValider(reponseJuste, indiceRep) {
    
    /**on aura besoin de changer la couleur du plan */ 
    let plan = document.querySelector('#plan');
    
    var stringRep = valideReponse();

    if(indiceRep == 5){
       affichagePopupNiveauSuperieur("ordinateur");
    }

    if(indiceRep == 10){
        document.getElementById('blockQuizz').style.display = 'none';
        document.getElementById('blockFinQuizz').style.display = 'flex';
    }

    if(stringRep == reponseJuste){
        document.getElementById("score").value = parseInt(document.getElementById("score").value) + 1; 
        if(indiceRep>5) {
            document.getElementById("score").value = parseInt(document.getElementById("score").value) + 1; 
        }
        //coloration du plan
        if (indiceRep >= 1){ //car indice 0 correspond au didactitiel
            coloriePlan(plan,"vert",indiceRep);
        }
        colorieReponseJuste("ordinateur",reponseJuste);
    }
    else {

        if (indiceRep >= 1){ //car indice 0 correspond au didactitiel
                coloriePlan(plan,"rouge",indiceRep)
        }

        document.getElementById('rep2').style.backgroundColor = 'red';
        document.getElementById('rep1').style.backgroundColor = 'red';
        document.getElementById('rep3').style.backgroundColor = 'red';
        document.getElementById('rep4').style.backgroundColor = 'red';
        for(let numRep = 1; numRep < 5; ++numRep) {
            if(document.getElementById('rep' + numRep.toString()).innerHTML == reponseJuste) {
                document.getElementById('rep' + numRep.toString()).style.backgroundColor = 'green';
            }                
        }
    }
    
    //coloration de la case sur laquelle est le joueur
    if (indiceRep >= 1){ //car indice 0 correspond au didactitiel
        coloriePlan(plan,"suivant",indiceRep);
    }
        
    document.getElementById('soumettre').innerHTML ="Continuer";
    if(indiceRep != 0) {
        changeExplicationQuestion(explications,indiceRep-1);
        ouvrirBotInstant();
    }

}

/** fonction remettant les boutons a la même couleur,incrémente le numéro de la question, remet le bot a zero */
function reinitialiseBoutons(aides,questions,indiceRep) { 
    document.getElementById('rep1').style.backgroundColor = '#00B7E9';
    document.getElementById('rep2').style.backgroundColor = '#00B7E9';
    document.getElementById('rep3').style.backgroundColor = '#00B7E9';
    document.getElementById('rep4').style.backgroundColor = '#00B7E9';
    document.getElementById('soumettre').innerHTML ="Valider";

    document.getElementById('questionPosee').innerHTML = questions[indiceRep].enonce;
    document.getElementById('rep1').innerHTML = questions[indiceRep].reponseUn;
    document.getElementById('rep2').innerHTML = questions[indiceRep].reponseDeux;
    document.getElementById('rep3').innerHTML = questions[indiceRep].reponseTrois;
    document.getElementById('rep4').innerHTML = questions[indiceRep].reponseQuatre;

    document.getElementById('num').innerHTML = parseInt(document.getElementById('num').innerHTML) + 1;

    fermerBot();
    changeAideQuestion(aides,indiceRep);
    ouvrirBot();
}

/** fonction qui récupère les questions importées de la base de données et constitue un quizz */
function creerQuizz() {
    let questionUn=new Question(document.getElementById('Libelle0').innerHTML,document.getElementById('rep00').innerHTML,
    document.getElementById('bonOuMauvais00').innerHTML,document.getElementById('rep01').innerHTML,
    document.getElementById('bonOuMauvais01').innerHTML,document.getElementById('rep02').innerHTML,
    document.getElementById('bonOuMauvais02').innerHTML,document.getElementById('rep03').innerHTML,
    document.getElementById('bonOuMauvais03').innerHTML,document.getElementById('Indice0').innerHTML,
    document.getElementById('Explication0').innerHTML
    );

    let questionDeux=new Question(document.getElementById('Libelle1').innerHTML,document.getElementById('rep10').innerHTML,
    document.getElementById('bonOuMauvais10').innerHTML,document.getElementById('rep11').innerHTML, 
    document.getElementById('bonOuMauvais11').innerHTML,document.getElementById('rep12').innerHTML,
    document.getElementById('bonOuMauvais12').innerHTML,document.getElementById('rep13').innerHTML,
    document.getElementById('bonOuMauvais13').innerHTML,document.getElementById('Indice1').innerHTML,
    document.getElementById('Explication1').innerHTML
    );

    let questionTrois=new Question(document.getElementById('Libelle2').innerHTML,document.getElementById('rep20').innerHTML,
    document.getElementById('bonOuMauvais20').innerHTML,document.getElementById('rep21').innerHTML,
    document.getElementById('bonOuMauvais21').innerHTML,document.getElementById('rep22').innerHTML,
    document.getElementById('bonOuMauvais22').innerHTML,document.getElementById('rep23').innerHTML,
    document.getElementById('bonOuMauvais23').innerHTML,document.getElementById('Indice2').innerHTML,
    document.getElementById('Explication2').innerHTML
    );


    let questionQuatre=new Question(document.getElementById('Libelle3').innerHTML,document.getElementById('rep30').innerHTML,
    document.getElementById('bonOuMauvais30').innerHTML,document.getElementById('rep31').innerHTML,
    document.getElementById('bonOuMauvais31').innerHTML,document.getElementById('rep32').innerHTML,
    document.getElementById('bonOuMauvais32').innerHTML,document.getElementById('rep33').innerHTML,
    document.getElementById('bonOuMauvais33').innerHTML,document.getElementById('Indice3').innerHTML,
    document.getElementById('Explication3').innerHTML
    );

    let questionCinq=new Question(document.getElementById('Libelle4').innerHTML,document.getElementById('rep40').innerHTML,
    document.getElementById('bonOuMauvais40').innerHTML,document.getElementById('rep41').innerHTML,
    document.getElementById('bonOuMauvais41').innerHTML,document.getElementById('rep42').innerHTML,
    document.getElementById('bonOuMauvais42').innerHTML,document.getElementById('rep43').innerHTML,
    document.getElementById('bonOuMauvais43').innerHTML,document.getElementById('Indice4').innerHTML,
    document.getElementById('Explication4').innerHTML
    );

    let questionSix=new Question(document.getElementById('Libelle5').innerHTML,document.getElementById('rep50').innerHTML,
    document.getElementById('bonOuMauvais50').innerHTML,document.getElementById('rep51').innerHTML,
    document.getElementById('bonOuMauvais51').innerHTML,document.getElementById('rep52').innerHTML,
    document.getElementById('bonOuMauvais52').innerHTML,document.getElementById('rep53').innerHTML,
    document.getElementById('bonOuMauvais53').innerHTML,document.getElementById('Indice5').innerHTML,
    document.getElementById('Explication5').innerHTML
    );
    let questionSept=new Question(document.getElementById('Libelle6').innerHTML,document.getElementById('rep60').innerHTML,
    document.getElementById('bonOuMauvais60').innerHTML,document.getElementById('rep61').innerHTML,
    document.getElementById('bonOuMauvais61').innerHTML,document.getElementById('rep62').innerHTML,
    document.getElementById('bonOuMauvais62').innerHTML,document.getElementById('rep63').innerHTML,
    document.getElementById('bonOuMauvais63').innerHTML,document.getElementById('Indice6').innerHTML,
    document.getElementById('Explication6').innerHTML
    );
    let questionHuit=new Question(document.getElementById('Libelle7').innerHTML,document.getElementById('rep70').innerHTML,
    document.getElementById('bonOuMauvais70').innerHTML,document.getElementById('rep71').innerHTML,
    document.getElementById('bonOuMauvais71').innerHTML,document.getElementById('rep72').innerHTML,
    document.getElementById('bonOuMauvais72').innerHTML,document.getElementById('rep73').innerHTML,
    document.getElementById('bonOuMauvais73').innerHTML,document.getElementById('Indice7').innerHTML,
    document.getElementById('Explication7').innerHTML
    );
    let questionNeuf=new Question(document.getElementById('Libelle8').innerHTML,document.getElementById('rep80').innerHTML,
    document.getElementById('bonOuMauvais80').innerHTML,document.getElementById('rep81').innerHTML,
    document.getElementById('bonOuMauvais81').innerHTML,document.getElementById('rep82').innerHTML,
    document.getElementById('bonOuMauvais82').innerHTML,document.getElementById('rep83').innerHTML,
    document.getElementById('bonOuMauvais83').innerHTML,document.getElementById('Indice8').innerHTML,
    document.getElementById('Explication8').innerHTML
    );
    let questionDix=new Question(document.getElementById('Libelle9').innerHTML,document.getElementById('rep90').innerHTML,
    document.getElementById('bonOuMauvais90').innerHTML,document.getElementById('rep91').innerHTML,
    document.getElementById('bonOuMauvais91').innerHTML,document.getElementById('rep92').innerHTML,
    document.getElementById('bonOuMauvais92').innerHTML,document.getElementById('rep93').innerHTML,
    document.getElementById('bonOuMauvais93').innerHTML,document.getElementById('Indice9').innerHTML,
    document.getElementById('Explication9').innerHTML
    );
    listeQuestionsGeneralesUn=[questionUn,questionDeux,questionTrois];
    listeQuestionsSpeUn=[questionQuatre,questionCinq];
    listeQuestionsGeneralesDeux=[questionSix,questionSept,questionHuit];
    listeQuestionsSpeDeux=[questionNeuf,questionDix];

    /** creation du quizz */
    quizz = new Quizz(listeQuestionsGeneralesUn,listeQuestionsGeneralesDeux,
    listeQuestionsSpeUn,listeQuestionsSpeDeux);

}

/** fonction attribuant les questions du quizz à une liste de questions */
function attribueQuestions() {
     /** tableau de questions */
    questions = [
        quizz.questionsGeneraleUn[0],
        quizz.questionsGeneraleUn[1],
        quizz.questionsGeneraleUn[2],
        quizz.questionsSpeUn[0],
        quizz.questionsSpeUn[1], 
        
        quizz.questionsGeneraleDeux[0],
        quizz.questionsGeneraleDeux[1],
        quizz.questionsGeneraleDeux[2],
        quizz.questionsSpeDeux[0],
        quizz.questionsSpeDeux[1],"fin"];
} 

/** fonction qui remplit un tableau de chaines de caractères contenant les aides contextuelles des questions */
function attribueAides() {
     /** tableau de String contenant les aides contextuelles */
    aides = [quizz.questionsGeneraleUn[0].aideQuestion,
     quizz.questionsGeneraleUn[1].aideQuestion,
     quizz.questionsGeneraleUn[2].aideQuestion,
     quizz.questionsSpeUn[0].aideQuestion,
     quizz.questionsSpeUn[1].aideQuestion,
 
     quizz.questionsGeneraleDeux[0].aideQuestion,
     quizz.questionsGeneraleDeux[1].aideQuestion,
     quizz.questionsGeneraleDeux[2].aideQuestion,
     quizz.questionsSpeDeux[0].aideQuestion,
     quizz.questionsSpeDeux[1].aideQuestion,"fin"];
}

/** fonction qui remplit un tableau de chaines de caractères contenant les explications des réponses */
function attribueExplications() {
    /** tableau de String contenant les explications */
    explications = [quizz.questionsGeneraleUn[0].explication,
    quizz.questionsGeneraleUn[1].explication,
    quizz.questionsGeneraleUn[2].explication,
    quizz.questionsSpeUn[0].explication,
    quizz.questionsSpeUn[1].explication,

    quizz.questionsGeneraleDeux[0].explication,
    quizz.questionsGeneraleDeux[1].explication,
    quizz.questionsGeneraleDeux[2].explication,
    quizz.questionsSpeDeux[0].explication,
    quizz.questionsSpeDeux[1].explication,"fin"];
}

/** fonction qui charge les questions, les indices, agit de deux manières, si on a répondu ou non et si on veut continuer */
function cliqueValiderOuContinuer(idBoiteRep){ 
    let indiceRep =  parseInt(document.getElementById('num').innerHTML);

    if(indiceRep == 0) {
        creerQuizz();  
        attribueQuestions();
        attribueAides();
        attribueExplications();
    }
     
    /**pour la premiere question*/
    var reponseJuste = "oui"; 

    /**pour les autres questions, on récupère la bonne réponse*/
    if (indiceRep > 0) {
        for(let i = 1; i<2; ++i) {
            if(questions[indiceRep-1].bonOuMauvaisUn == ' bon ') {
                reponseJuste = questions[indiceRep-1].reponseUn;
            }
            if(questions[indiceRep-1].bonOuMauvaisDeux == ' bon ') {
                reponseJuste = questions[indiceRep-1].reponseDeux;
            }
            if(questions[indiceRep-1].bonOuMauvaisTrois == ' bon ') {
                reponseJuste = questions[indiceRep-1].reponseTrois;
            }
            if(questions[indiceRep-1].bonOuMauvaisQuatre == ' bon ') {
                reponseJuste = questions[indiceRep-1].reponseQuatre;
            }

        }       
    }

    if (document.getElementById('soumettre').innerHTML == "Valider") {
        cliqueSurValider(reponseJuste, indiceRep);
    }
    /**si on a fini de répondre, on remet tout à zéros */ 
    else {
        reinitialiseBoutons(aides,questions,indiceRep);    
        if(document.getElementById('popup_video').style.display != 'none') {
            document.getElementById('popup_video').style.display = 'none';

        }
    }  
}

/** fonction fermant le bot */
function fermerBot() {
        document.getElementById("logoBoutonBotHaut").style.display = "initial";
        document.getElementById("logoBoutonBotBas").style.display = "none";
        document.getElementById("chatBot").style.height -= 100 + "px";
        document.getElementById("aideBot").style.top = 92 + "%";

        document.getElementById("logoBoutonBotHautMobile").style.display = "initial";
        document.getElementById("logoBoutonBotBasMobile").style.display = "none";
        document.getElementById("chatBotMobile").style.height -= 100 + "px";
        document.getElementById("aideBotMobile").style.top = 92 + "%";

        chat = false;
}

/** fonction ouvrant le bot après un certain temps */
function ouvrirBot() {
    setTimeout(function(){
        chat = true;
        document.getElementById("logoBoutonBotHaut").style.display = "none";
        document.getElementById("logoBoutonBotBas").style.display = "initial"; 
        document.getElementById("chatBot").style.height += 100 + "px";
        document.getElementById("aideBot").style.top = 81 + "%";

        document.getElementById("logoBoutonBotHautMobile").style.display = "none";
        document.getElementById("logoBoutonBotBasMobile").style.display = "initial"; 
        document.getElementById("chatBotMobile").style.height += 100 + "px";
        document.getElementById("aideBotMobile").style.top = 81 + "%";
    }, 5000);
    
}

/** fonction ouvrant le bot directement */
function ouvrirBotInstant() {
    chat = true;
    document.getElementById("logoBoutonBotHaut").style.display = "none";
    document.getElementById("logoBoutonBotBas").style.display = "initial"; 
    document.getElementById("chatBot").style.height += 100 + "px";
    document.getElementById("aideBot").style.top = 81 + "%";

    document.getElementById("logoBoutonBotHautMobile").style.display = "none";
    document.getElementById("logoBoutonBotBasMobile").style.display = "initial"; 
    document.getElementById("chatBotMobile").style.height += 100 + "px";
    document.getElementById("aideBotMobile").style.top = 81 + "%";
}

/** fonction qui ouvre ou ferme le bot selon la situation actuelle du bot */
function ouvrirFermerBot () {
    if (chat === true){
        fermerBot();
    }else{
        ouvrirBot();
    }
}

/** fonction  gérant la réponse sélectionnée par l'utilisateur avant validation : version mobile */
function gestionReponseSelectionneMobile(idBoiteRep){
    var colBout1 = document.getElementById('rep1Mobile').style.backgroundColor;
    var colBout2 = document.getElementById('rep2Mobile').style.backgroundColor;
    var colBout3 = document.getElementById('rep3Mobile').style.backgroundColor;
    var colBout4 = document.getElementById('rep4Mobile').style.backgroundColor;
    var style = document.getElementById(idBoiteRep).style.backgroundColor;

    if(style == "rgb(0, 183, 233)"){
        if(colBout1 == "rgb(255, 165, 0)")
            document.getElementById('rep1Mobile').style.backgroundColor='#00B7E9';
        if(colBout2 == "rgb(255, 165, 0)")
            document.getElementById('rep2Mobile').style.backgroundColor='#00B7E9';
        if(colBout3 == "rgb(255, 165, 0)")
            document.getElementById('rep3Mobile').style.backgroundColor='#00B7E9';
        if(colBout4 == "rgb(255, 165, 0)")
            document.getElementById('rep4Mobile').style.backgroundColor='#00B7E9';
        document.getElementById(idBoiteRep).style.backgroundColor='#FFA500'; 
    }
    else if(style == "rgb(255, 165, 0)"){
        document.getElementById(idBoiteRep).style.backgroundColor='#00B7E9';
    }
}

/** fonction gérant la réponse validée par l'utilisateur */
function valideReponseMobile(){  
    var colBout1 = document.getElementById('rep1Mobile').style.backgroundColor;
    var colBout2 = document.getElementById('rep2Mobile').style.backgroundColor;
    var colBout3 = document.getElementById('rep3Mobile').style.backgroundColor;
    var colBout4 = document.getElementById('rep4Mobile').style.backgroundColor;

    var stringRep;

    if(colBout1 == "rgb(255, 165, 0)")
            stringRep = document.getElementById('rep1Mobile').innerHTML;
    if(colBout2 == "rgb(255, 165, 0)")
            stringRep = document.getElementById('rep2Mobile').innerHTML;
    if(colBout3 == "rgb(255, 165, 0)")
            stringRep = document.getElementById('rep3Mobile').innerHTML;
    if(colBout4 == "rgb(255, 165, 0)")
            stringRep = document.getElementById('rep4Mobile').innerHTML;
    return stringRep;
}

/** fonction permettant de mettre à jour la couleur des boutons et le plan selon la réponse validée, on incrémente aussi le score si besoin */
function cliqueSurValiderMobile(reponseJuste, indiceRep) {
    /**on aura besoin de changer la couleur du plan */ 
    let plan = document.querySelector('#planMobile');

    var stringRep = valideReponseMobile();

    if(indiceRep == 5){
    affichagePopupNiveauSuperieur('mobile');
    }

    if(indiceRep == 10){
        document.getElementById('blockQuizzMobile').style.display = 'none';
        document.getElementById('blockFinQuizzMobile').style.display = 'flex';
    }

    if(stringRep == reponseJuste){
        document.getElementById("scoreMobile").value = parseInt(document.getElementById("scoreMobile").value) + 1; 
        if(indiceRep>5) {
            document.getElementById("scoreMobile").value = parseInt(document.getElementById("scoreMobile").value) + 1; 
        }
        //coloration du plan
        if (indiceRep >= 1){ //car indice 0 correspond au didactitiel
            coloriePlan(plan,"vert",indiceRep)
        }
        colorieReponseJuste("mobile",reponseJuste);
    }
    else {
        //coloration du plan
        if (indiceRep >= 1){ //car indice 0 correspond au didactitiel
            coloriePlan(plan,"rouge",indiceRep)
        }

        document.getElementById('rep2Mobile').style.backgroundColor = 'red';
        document.getElementById('rep1Mobile').style.backgroundColor = 'red';
        document.getElementById('rep3Mobile').style.backgroundColor = 'red';
        document.getElementById('rep4Mobile').style.backgroundColor = 'red';
        for(let numRep = 1; numRep < 5; ++numRep) {
            if(document.getElementById('rep' + numRep.toString() + 'Mobile').innerHTML == reponseJuste) {
                document.getElementById('rep' + numRep.toString() + 'Mobile').style.backgroundColor = 'green';
            }               
        }
    }  
    //coloration de la case sur laquelle est le joueur
    if (indiceRep >= 1){ //car indice 0 correspond au didactitiel
        coloriePlan(plan,"suivant",indiceRep)
    }
        
    document.getElementById('soumettreMobile').innerHTML ="Continuer";
    if(indiceRep != 0) {
        changeExplicationQuestion(explications,indiceRep-1);
        ouvrirBotInstant();
    }
}

/** fonction remettant les boutons a la même couleur,incremente le numero de la question, remet le bot a zero */
function reinitialiseBoutonsMobile(aides,questions,indiceRep) { 
    document.getElementById('rep1Mobile').style.backgroundColor = '#00B7E9';
    document.getElementById('rep2Mobile').style.backgroundColor = '#00B7E9';
    document.getElementById('rep3Mobile').style.backgroundColor = '#00B7E9';
    document.getElementById('rep4Mobile').style.backgroundColor = '#00B7E9';
    document.getElementById('soumettreMobile').innerHTML ="Valider";

    document.getElementById('questionPoseeMobile').innerHTML = questions[indiceRep].enonce;
    document.getElementById('rep1Mobile').innerHTML = questions[indiceRep].reponseUn;
    document.getElementById('rep2Mobile').innerHTML = questions[indiceRep].reponseDeux;
    document.getElementById('rep3Mobile').innerHTML = questions[indiceRep].reponseTrois;
    document.getElementById('rep4Mobile').innerHTML = questions[indiceRep].reponseQuatre;

    document.getElementById('numMobile').innerHTML = parseInt(document.getElementById('numMobile').innerHTML) + 1;

    fermerBot();
    changeAideQuestion(aides,indiceRep);
    ouvrirBot();
}

/** fonction qui crée le quizz(questions etc..), agit de deux manières, si on a répondu ou non et si on veut continuer */
function cliqueValiderOuContinuerMobile(idBoiteRep){ 
    let indiceRep =  parseInt(document.getElementById('numMobile').innerHTML);
    if(indiceRep == 0) {
        creerQuizz();  
        attribueQuestions();
        attribueAides();
        attribueExplications();
    }
     
    /** pour la premiere question */
    var reponseJuste = "oui"; 

    /** pour les autres questions, on récupère la bonne réponse */
    if (indiceRep > 0) {
        for(let i = 1; i<2; ++i) {
            if(questions[indiceRep-1].bonOuMauvaisUn == ' bon ') {
                reponseJuste = questions[indiceRep-1].reponseUn;
            }
            if(questions[indiceRep-1].bonOuMauvaisDeux == ' bon ') {
                reponseJuste = questions[indiceRep-1].reponseDeux;
            }
            if(questions[indiceRep-1].bonOuMauvaisTrois == ' bon ') {
                reponseJuste = questions[indiceRep-1].reponseTrois;
            }
            if(questions[indiceRep-1].bonOuMauvaisQuatre == ' bon ') {
                reponseJuste = questions[indiceRep-1].reponseQuatre;
            }
        }
    }

    if (document.getElementById('soumettreMobile').innerHTML == "Valider") {
        cliqueSurValiderMobile(reponseJuste, indiceRep);
    }
    /** si on a fini de répondre, on remet tout à zéros */ 
    else {
        reinitialiseBoutonsMobile(aides,questions,indiceRep);    
        if(document.getElementById('popup_video').style.display != 'none') {
            document.getElementById('popup_video').style.display = 'none';

        }
    }  
}

/** fonction affichant la carte dans la version mobile du jeu*/
function afficherCarte() {
    if(document.getElementById('planMobile').style.display != 'initial') {
        document.getElementById('planMobile').style.display = 'initial';
    }
    else {
        document.getElementById('planMobile').style.display = 'none';
    }
}