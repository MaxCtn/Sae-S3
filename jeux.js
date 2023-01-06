/**fonction permettant de melanger au hasard les elements d'une liste.*/
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

/**la classe Question a un enoncé, 4 reponses possibles bonnes ou mauvaises et une aide pour la question*/
class Question  { 
    /** @constructor 
    * @param {string} enonce - enonce de la question
    * @param {string} reponseUn - reponse 1 de la question 
    * @param {boolean} bonOuMauvaisUn - si la reponse 1 est juste ou non
    * @param {string} reponseDeux - reponse 2 de la question
    * @param {boolean} bonOuMauvaisUn - si la reponse 2 est juste ou non
    * @param {string} reponseDeux - reponse 2 de la question
    * @param {boolean} bonOuMauvaisUn - si la reponse 2 est juste ou non
    * @param {string} reponseTrois - reponse 3 de la question
    * @param {boolean} bonOuMauvaisTrois - si la reponse 3 est juste ou non
    * @param {string} reponseQuatre - reponse 4 de la question
    * @param {boolean} bonOuMauvaisQuatre - si la reponse 4 est juste ou non
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

class Quizz { /**la classe Quizz comporte, 4 listes de questions(2 de thème général et 2 de thème choisi comme spécialité)*/
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

/**création d'objets Questions provenant de la base de données  */
const ques1 = new Question('Quel est l’objectif d’une saé?','Mettre en pratique les connaissances liées à une compétence',
'bon','Savoir réaliser un projet en autonomie complète','mauvais','Acquérir un grand nombre de connaissance théorique',
'mauvais','Donner les connaissances nécessaires à la création d\'une entreprise','mauvais','c\'est un projet collaboratif','Une saé est un projet, généralement centré sur une seule compétence et permet la mise en pratique des connaissances théoriques précédemment apprises');

const ques2 = new Question('Dans le But, une ressource correspond à ','une matière','bon','des références','mauvais',
'un cours magistral ',
'mauvais','une documentation','mauvais','Elle fait l\'objet de partiels','Une ressource correspond tout simplement à une matière sur laquelle il y aura des partiels');

const ques3 = new Question('Un ORE peut s\'apparenter à ','une aide aux devoir','mauvais','intervenir auprès des premières années',
'mauvais','un exercice de prise de parole à l\'oral','mauvais','un cours supplémentaire facultatif ou non ',
'bon','on s\'en sert notamment pour s\'entraîner avant un partiel','Une ORE est un cours qui peut être obligatoire ou non selon les notes de l\'intéressé');

const ques4 = new Question('Afin de passer en seconde année, vous devez avoir à minima : ','10/20 dans chaque compétence',
'mauvais','8/20 dans chaque compétence',
'mauvais','une moitié des compétences à 8/20 et le reste à 10/20','mauvais','deux compétences à 8/20 et le reste à 10/20 ',
'bon','Il existe en effet une tolérance sur une partie des compétences','Pour passer en seconde année, il faut 2 compétences a minima 8 et les 4 autres à 10, si vous êtes dans cette situation et que vous n\'avez pas la moyenne dans toutes les compétences, vous serez obligé, pendant le premier semestre de la seconde année de rattraper les compétences ou vous n\'avez pas eu la moyenne.');
 
const ques5 = new Question('Quel est la principale évolution entre le dut et le but?','Le DUT dure un ans de plus','mauvais',
'Le BUT comprends moins de travaux de groupe',
'mauvais','Le BUT dure un ans de plus et comprends plus de travaux de groupe','bon',
'Aucune évolution seul le nom change ','mauvais','Le BUT vous permet d\'atteindre BAC +3','Le BUT s\'adapte aux normes européennes, il ne dure donc plus 2 ans mais 3 ans en fusionnant le DUT avec une licence professionnelle.');

const ques6 = new Question('Quand peut-on demander une année en alternance ',
'Possibilité de demander dès l\'inscription en première année','mauvais',
'Dès l\'inscription en deuxième année si on a eu au moins 10 sur chaque compétence',
'mauvais','Dès l\'inscription en deuxième année si on a eu au moins 14 sur chaque compétence',
'mauvais','Dès l\'inscription en deuxième année en parcours A si on a eu au moins 10 sur chaque compétence ',
'bon',
'Bien qu\'il y ait très peu d\'élèves allant en alternance, les critères pour y rentrer sont légitimes et possibles à atteindre','On peut passer une alternance à partir de la deuxième année si on emprunte le parcours A et a partir de la troisième année si on choisis le parcours B');

const ques7 = new Question('Combien y\'a t-il de parcours en seconde année dans ce but informatique'
,'1','mauvais',
'2', 'bon',
'3','mauvais',
'4','mauvais'
,'Il n\'y en a pas beaucoup','Le BUT informatique d\'Aix est composé de deux parcours, A et B, L\'un est axé programmation(A) et l\'autre est axé reseaux(B)');

const ques8 = new Question('Combien y\'a t\'il de compétences à valider ?','4','mauvais',
'6','bon','8','mauvais','100','mauvais',
'Une compétence correspond à un ensemble de ressource','Afin de valider votre année, vous devez valider 6 compétences');

const ques9 = new Question('Qu\'est ce qu\'un cm ?'
,'Cours magistral','bon',
'Cours magique','mauvais'
,'Cours moyen','mauvais'
,'Cours moral','mauvais',
'Un cm est un cours rassemblant toute une promotion','Un cm est un cours magistral. C\'est un cours qui rassemble toute la promotion et qui permet d\'engendrer de nombreuse connaissances théoriques');

const ques10 = new Question('Qu\'est ce qu\'un tutorat'
,'un cours obligatoire fait par des profs','mauvais',
'un cours obligatoire fait par des élèves','mauvais',
'un cours facultatif fait par des profs','mauvais',
'un cours facultatif fait par des élèves','bon',
'Il est souvent fait les veilles de partiel, officiellement ou non','Les tutorats sont des cours fait par des élèves de manière officiel ou non et qui peuvent se situer dans le département informatique ou en distanciel');



const ques11 = new Question('Quelle commande ne concerne pas les fichiers ?'
,'Touch','mauvais',
'cat','mauvais'
,'rm','mauvais'
,'cd','bon',
'Les commandes ne concernent que la création ou la modification d\'un fichier','La commande cd permet de naviguer entre les dossiers, elle ne concerne donc pas les fichiers');

const ques12 = new Question('Quelle est le surnom qu\'on donne aux système d\'exploitation ?'
,'OP','mauvais',
'OD','mauvais'
,'OG','mauvais'
,'OS','bon',
'Un système d\'exploitation de l\'anglais "operating system"','On appelle ça un OS, ca vient de l\'anglais "Operating System"');

const ques13 = new Question('A quoi sert le dual boot ?'
,'A avoir deux systèmes d\'exploitation sur le même pc','bon',
'A avoir deux terminaux sur le même ordinateur','mauvais'
,'A pouvoir lancer deux systèmes d\'exploitation en même temps','mauvais'
,'Cela ne sert à rien','mauvais',
'Ca peut servir notamment pour des développeurs travaillant sur plusieurs systèmes d\'exploitations','Un dual boot sert à avoir deux systèmes d\'exploitation sur un même PC. Cela permet donc, par exemple, de "scinder" son pc en deux et d\'avoir une partie perso et une partie professionnel');




const ques20 = new Question('Un programme est','une spécification fonctionnelle','mauvais',
'une fonction système','mauvais','une procédure système','mauvais',
'un algorithme traduit en langage de programmation','bon','Par exemple tu veux faire un calcul l\'ordinateur interprètera le programme et réalisera le calcul étapes par étapes.');

const ques21 = new Question('Comment appelle t-on un élément susceptible de changer?','une variable',
'bon','une constante','mauvais','un élément privé','mauvais','un élément public','mauvais',
'Tout est dans le mot','En effet, une variable est quelque chose qui peut varier, donc qui peut changer potentiellement de valeur ');

const ques22 = new Question('Pour déclarer un élément qui ne change jamais en C++, on utilise ',
'string','mauvais','constant','mauvais','const','bon','&','mauvais',
'C\'est une forme réduit d\'un mot','En C++, si on veut créer une constante (variable qui ne change pas) il suffit de mettre le mot "const" juste avant le type de la variable.');

const ques23 = new Question('Dans un algorithme, que fait on en premier?','On retourne un résultat',
'mauvais','on effectue des tests','mauvais',
'On déclare ce qu\'on va utiliser dans le corps de l\'algorithme','bon',
'On initialise sans déclarer','mauvais',
'Au début d\'un programme, on ne va pas retourner un résultat','Au début d\'un algorithme, on déclare une partie de ce qu\'on va utiliser dans l\'algorithme pour éviter le besoin de créer des variables partout dans le code sans raison ( bien que dans certaines situations, la création de variable au sein du code soit plus qu\'utile)');

const ques24 = new Question('Dans cette ligne de code en C++, quel est le nom de la variable ? int x = 48;','int',
'mauvais',
'x','bon',
'48','mauvais',
'Il n\'y a pas de variable dans cette ligne de code','mauvais',
'Pour déclarer une variable, d\'abord on dit son type, puis son nom et potentiellement on lui donne une valeur','En effet, pour déclarer une variable, d\'abord on donne son type (int), ensuite son nom (x) et enfin, ce n\'est pas obligatoire mais on peut lui donner une valeur (48)');

const ques25 = new Question('Quel est le nom du type de variable prenant comme valeur des nombres entiers dans ces propositions',
'float','mauvais'
,'int','bon',
'char','mauvais',
'string','mauvais',
'La réponse est "entier" en anglais','le nom du type int viens de "Integer" signifiant entier en anglais');

const ques26 = new Question('Laquelle de ces propositions ne permet pas de faire une boucle infinie',
'while(true)', 'mauvais'
,'for(;;)','mauvais',
'while(0)','bon',
'while(1)','mauvais',
'1 correspond à vrai en C++','while(true) et while(1) désignent une boucle "tant que" et for(;;) désignent une boucle "jusqu\'à", ces trois boucles n\'ont pas de conditions de sortie, elles sont donc infinie.');


const ques30 = new Question('Qu\'est ce qu\'un réseau ?','Ensemble d\'équipements reliés entre eux',
'bon','Ensemble de périphériques reliés à un ordinateur','mauvais',
'Ensemble d\'équipements non reliés entre eux','mauvais',
'Ensemble de fichiers reliés entre eux','mauvais','Pour donner un exemple, une maison peut être un réseau','Un réseau est un ensemble d\'équipements reliés entre eux, il en existe à tous les niveaux, les équipements d\'une maison peuvent être un réseau, internet est un réseau etc');

const ques31 = new Question('Lequel n\'est pas un type de réseau ?','LAN','mauvais','SAN','bon','WAN',
'mauvais','MAN','mauvais','LAN et WAN sont les deux principaux types de réseaux existants','AN dans ces différents acronymes signifie AREA NETWORK, ainsi L veut dire LOCAL, M veut dire METROPOLITAN, W veut dire WIDE et S ne veut rien dire ');

const ques32 = new Question('Quel mode de diffusion n\'existe pas ?',
'Monodiffusion','mauvais','Diffusion','mauvais','Unidiffusion',
'bon','Multidiffusion','mauvais','Monodiffusion et multidiffusion sont deux modes classiques de diffusion','Parmis les précédents modes de diffusions, le seul n\'existant pas est Unidiffusion. la monodiffusion cible un équipement, la multidiffusion en cible plusieurs et la diffusion les ciblent tous');

const ques33 = new Question('Lequel n\'est pas un type de réseau ( net )',
'Internet','mauvais','Externet','bon','Intranet',
'mauvais','Extranet','mauvais','Internet est un vrai type de réseau','Ici, le type de réseau qui n\'existe pas est l\'externet. Internet est le plus grand réseau du monde interconnectant des LAN et des WAN, l\'intranet est un réseau d\'une organisation laissant l\'accès possible uniquement à ses membres et l\'extranet est un réseau d\'une organisation qui laisse un accès potentiellement à ses collaborateurs');

const ques34 = new Question('Combien existe-t-il de modèle en couche ?',
'1','mauvais','2','bon','3','mauvais','4','mauvais','Il y en a pas beaucoup','En effet, il en existe deux, le modèle OSI et le modèle TCP/IP');

const ques35 = new Question('Lequel n\'est pas un support réseau ?',
'Câble avec fil métallique','mauvais','Fibre optique','mauvais',
'Transmission sans fil','mauvais','Serveur','bon',
'Un support réseau est un moyen de transporter une information, de manière physique ou non','En effet un support réseau permet la transmission d\'information, un serveur n\'a donc rien à voir avec ce concept');



const ques36 = new Question('Lequel des ces langages est un langage balisé ?'
,'C++','mauvais',
'Java','mauvais'
,'HTML','bon'
,'C#','mauvais',
'Ce langage est simple d\'utilisation, on l\'utilise pour les sites web','HTML signifie Hypertext Markup Language c\'est un langage de balisage utilisé pour créer la structure de la page web');

const ques37 = new Question('Quel balise permet l\'implémentation d\'une image ?'
,'img','bon',
'image','mauvais'
,'picture','mauvais'
,'photo','mauvais',
'Image est un mot transparent en anglais','La balise permettant d\'implémenter des images dans un site web est img, les autres balises n\'existent pas');

const ques38 = new Question('Quels sont les deux principaux langages de programmation permettant la création de sites web ?'
,'Java et python','mauvais',
'HTML et Java','mauvais'
,'HTML et CSS','bon'
,'SQL et CSS','mauvais',
'HTML est un langage balisé permettant la création d\'une simple page web','En effet, pour créer un site web, on utilise HTML ( fond du site ) et CSS ( forme du site )');

const ques39 = new Question('Quel balise n\'est pas obligatoire à la création d\'un site web ?'
,'html','mauvais',
'body','mauvais'
,'head','mauvais'
,'style','bon',
'Un site web nécessite un corps et une en-tête pour fonctionner correctement','La balise style est une balise permettant d\'ajouter du code javascript directement dans du code html, elle n\'est donc pas utile à la création d\'un site web');

const ques40 = new Question('Quel langage permet l\'implémentation de mécanisme complexe dans un site web ?'
,'Javascript','bon',
'Java','mauvais'
,'HTML','mauvais'
,'CSS','mauvais',
'Html et css permettent la création d\'un site statique','Le "#" permet d\'indiquer que ce qui est écrit après est un id d\'une balise html');

const ques41 = new Question('Quel balise permet la création d\'un texte basique ?'
,'texte','mauvais',
'p','bon'
,'para','mauvais'
,'t','mauvais',
'On appelle souvent ça un paragraphe','Le "." permet d\'indiquer que ce qui est ecrit apres est une classe ');

const ques42 = new Question('En CSS, quel sélecteur permet de spécifier un id ?'
,'#','bon',
'.','mauvais'
,'/','mauvais'
,'Il n\'y a pas besoin de sélecteur pour un id','mauvais','Il y a besoin d\'un signe bien particulier pour un id',
'Le "#" permet d\'indiquer que ce qui est écrit apres est un id d\'une balise html');

const ques43 = new Question('En CSS, quel sélecteur permet de spécifier une classe ?'
,'#','mauvais',
'.','bon'
,'/','mauvais'
,'Il n\'y a pas besoin de sélecteur pour une classe','mauvais','Il y a besoin d\'un signe bien particulier pour une classe',
'Le "." permet d\'indiquer que ce qui est ecrit après est une classe ');

const ques44 = new Question('Quel balise n\'est pas une balise unique (balise orpheline) ?'
,'br','mauvais',
'span','bon'
,'input','mauvais'
,'img','mauvais',
'L\'intrus a rapport avec le texte','La balise span est ici l\'intrus, elle sert a appliquer des contraintes au texte qu\'elle entoure');

const ques45 = new Question('De quel langage de programmation vient cette ligne de code: "document.getElementById("texte");" ?'
,'HTML','mauvais',
'CSS','mauvais'
,'PHP','mauvais'
,'Javascript','bon',
'Elle ne vient pas d\'un langage balisé mais permet d\'intéragir sur celui-ci','En effet cette ligne permet dans le langage javascript de séléctionner une balise ayant l\'id "texte"');

const ques46 = new Question('De quel langage de programmation vient cette ligne de code: "head{ color : red; }" ?'
,'HTML','mauvais',
'CSS','bon'
,'PHP','mauvais'
,'Javascript','mauvais',
'Elle ne vient pas d\'un langage balisé mais permet d\'intéragir sur celui-ci','Cette ligne de code permet dans le langage CSS de changer la couleur du texte en rouge');


const ques47 = new Question('Quel est le langage qui nous permet d\'administrer une base de données ?'
,'SQL','bon',
'Python','mauvais'
,'Java','mauvais'
,'CSS','mauvais',
'Python et CSS n\'ont rien à voir avec l\'administration d\'une base de données','En effet, le langage de programmation permettant l\'administration d\'une base de donnée est le SQL');

const ques48 = new Question('A quoi sert une base de données ?'
,'Elle permet le stockage de variable temporaire d\'un programme','mauvais',
'C\'est les données basiques d\'un projet informatique','mauvais'
,'Elle sert à stocker des données de manière structurée','bon'
,'Cela ne sert à rien','mauvais',
'Une base de données est utilisée pour stocker des informations','Une base de données est un outil extrêmement important pour un projet informatique car il permet de stocker des données de manière structurée');

const ques49 = new Question('Quelle est la syntaxe pour une requête SQL basique ?'
,'WHO / FROM / SELECT','mauvais',
'OF / SELECT / VIEW','mauvais'
,'SELECT / FROM / WHERE','bon'
,'WHEN / OF / SELECT','mauvais',
'On pointe l\'attribut qu\'on veut, puis on dit d\'où il vient et enfin on ajoute une condition','Une requête basique SQL est "SELECT/FROM/WHERE" où SELECT nous permet de sélectionner l\'attribut qui nous intéresse, FROM nous permet de dire dans quelle table est contenu notre attribut et WHERE qui permet d\'appliquer une condition à ce qu\'on veut.  ');

const ques50 = new Question('Quelle commande impose une condition'
,'Select','mauvais',
'When','bon'
,'from','mauvais'
,'Fetch','mauvais',
'Select et from  permettent de selectionner précisement un attribut','WHERE permet d\'appliquer une condition sur une requête');

const ques51 = new Question('A quoi sert le serveur dans une base de données ?'
,'Il sert d\'intermédiaire entre le client et l\'utilisateur','mauvais',
'Il sert d\'intermédiaire entre le client et la base de données','bon'
,'Il sert d\'intermédiaire entre le client et un autre client','mauvais'
,'Il sert à stocker les données d\'une table','mauvais',
'Le serveur est un intermédiaire pour le client','grâce au php le serveur sert d\'intermédiaire entre le client et la base de données');

const ques52 = new Question('Que veut dire SQL ?'
,'Sensor quality language','mauvais',
'Selected quality language','mauvais'
,'Structured Query language','bon'
,'Structured Quantity language','mauvais',
'Le SQL permet d\'ajouter, de structurer et de modifier des données','La réponse était "Structured Query Language"');

    
var listeQuestionsSpeUn;

var listeQuestionsSpeDeux;

var toutesQuestionsGeneralesUn=shuffle([ques2,ques3,ques5,ques8,ques9]);

var toutesQuestionsListeProgUn=shuffle([ques20,ques21,ques22,ques23]);

var toutesQuestionsListeReseauxUn=shuffle([ques30,ques31,ques32]);

var toutesQuestionsListeWebUn=shuffle([ques36,ques37,ques38,ques39,ques40,ques41]);

var toutesQuestionsListeBdUn=shuffle([ques47,ques48,ques49]);

var toutesQuestionsListeSystemeUn=shuffle([ques11,ques12,ques13]);



var toutesQuestionsGeneralesDeux=shuffle([ques1,ques4,ques6,ques7,ques10]);

var toutesQuestionsListeProgDeux=shuffle([ques24,ques25,ques26]);

var toutesQuestionsListeReseauxDeux=shuffle([ques33,ques34,ques35]);

var toutesQuestionsListeWebDeux=shuffle([ques42,ques43,ques44,ques45,ques46]);

var toutesQuestionsListeBdDeux=shuffle([ques50,ques51,ques52]);

var toutesQuestionsListeSystemeDeux=shuffle([ques11,ques12,ques13]);

var listeQuestionsGeneralesUn=[toutesQuestionsGeneralesUn[0],toutesQuestionsGeneralesUn[1],
toutesQuestionsGeneralesUn[2]];

var listeQuestionsGeneralesDeux=[toutesQuestionsGeneralesDeux[0],toutesQuestionsGeneralesDeux[1],
toutesQuestionsGeneralesDeux[2]];


var quizz;

var aides;

var questions;

var listeQuestionsToutesSpeUn = [[toutesQuestionsListeWebUn[0],toutesQuestionsListeWebUn[1]],
[toutesQuestionsListeProgUn[0],toutesQuestionsListeProgUn[1]],
[toutesQuestionsListeReseauxUn[0],toutesQuestionsListeReseauxUn[1]],
[toutesQuestionsListeBdUn[0],toutesQuestionsListeBdUn[1]],
[toutesQuestionsListeSystemeUn[0],toutesQuestionsListeSystemeUn[1]]];

var listeQuestionsToutesSpeDeux = [[toutesQuestionsListeWebDeux[0],toutesQuestionsListeWebDeux[1]],
[toutesQuestionsListeProgDeux[0],toutesQuestionsListeProgDeux[1]],
[toutesQuestionsListeReseauxDeux[0],toutesQuestionsListeReseauxDeux[1]],
[toutesQuestionsListeBdDeux[0],toutesQuestionsListeBdDeux[1]],
[toutesQuestionsListeSystemeDeux[0],toutesQuestionsListeSystemeDeux[1]]];




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
/** fonction permettant de mettre jour l'aide contextuelle après la question précédente*/ 
function changeAideQuestion(aides, indiceRep){ 
    let aideQuestion = aides[indiceRep];
    document.getElementById('chatBot').innerHTML = aideQuestion;
    document.getElementById('chatBotMobile').innerHTML = aideQuestion;
}



//function attribueQuestions() { //fonction renvoyant la liste des questions

/**fonction fermant le pop up de la vidéo après la question 5 */
function closeScreenJeux() {
    document.getElementById('popup_video').style='none';
}

/**fonction permettant de mettre à jour la couleur des boutons et le plan selon la réponse validée, on incrémente aussi le score si besoin*/
function cliqueSurValider(reponseJuste, indiceRep) {
    
    /**on aura besoin de changer la couleur du plan */ 
    let plan = document.querySelector('#plan');
    
    var stringRep = valideReponse();

    if(indiceRep == 5){
        //a changer for et dictionnaires
        document.getElementById('popup_video').style.display = 'block';
        if(document.getElementById('specialite').innerHTML=="programmation"){
            document.getElementById('titre_choixVideo').innerHTML = "La programmation : niveau supérieur";
            document.getElementById('PopupProg').style.display = 'block';
            fermerBot();    
        }
        if(document.getElementById('specialite').innerHTML=="reseaux"){
            document.getElementById('titre_choixVideo').innerHTML = "Le réseau : niveau supérieur";
            document.getElementById('PopupRes').style.display = 'block';
            fermerBot(); 
        }
        if(document.getElementById('specialite').innerHTML== "web"){
            document.getElementById('titre_choixVideo').innerHTML = "Le web : niveau supérieur";
            document.getElementById('PopupWeb').style.display = 'block';
            fermerBot();    
        }
        if(document.getElementById('specialite').innerHTML=="bd"){
            document.getElementById('titre_choixVideo').innerHTML = "La base de données : niveau supérieur";
            document.getElementById('PopupBd').style.display = 'block';
            fermerBot();    
        }
        if(document.getElementById('specialite').innerHTML=="systeme"){
            document.getElementById('titre_choixVideo').innerHTML = "Les systèmes : niveau supérieur";
            document.getElementById('PopupSys').style.display = 'block';
            fermerBot();    
        }
          
            //document.getElementById('titre_choixVideotitre_choixVideo').innerHTML = "Qu'est ce que la programmation ? : https://youtu.be/HSUTiFZB_-Y";
   
    }
   

    if(indiceRep == 10){
        //a changer
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
            let section = 'th[class="section' + indiceRep + '"]';
            plan.querySelectorAll(section).forEach(
                function (currentValue) {
                currentValue.style.backgroundColor = 'green';
                }
            );
        }
        //boucle for
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
            if(document.getElementById('rep' + numRep.toString()).innerHTML == reponseJuste) {
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

/**fonction remettant les boutons a la même couleur,incremente le numero de la question, remet le bot a zero */
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
    //changeQuestionReponse();
    document.getElementById('num').innerHTML = parseInt(document.getElementById('num').innerHTML) + 1;

    fermerBot();
    changeAideQuestion(aides,indiceRep);
    ouvrirBot();

    //if fin du jeu
}

/**fonction qui charge les questions, les indices, agit de deux manières, si on a répondu ou non*/
function cliqueValiderOuContinuer(idBoiteRep){ 
    //et si on veut continuer    
    //var questions = attribueQuestions();
    let indiceRep =  parseInt(document.getElementById('num').innerHTML);

    //a faire en fonction
    listeNomSpe=["web","programmation","reseaux","bd","systeme"];
    
   

    for(let i=0;i<5;++i) {
        if(document.getElementById("specialite").innerHTML==listeNomSpe[i]) {
            listeQuestionsSpeUn=[listeQuestionsToutesSpeUn[i][0],listeQuestionsToutesSpeUn[i][1]];
            listeQuestionsSpeDeux=[listeQuestionsToutesSpeDeux[i][0],listeQuestionsToutesSpeDeux[i][1]];
        }
            
        
    }
    /**creation du quizz */
    quizz = new Quizz(listeQuestionsGeneralesUn,listeQuestionsGeneralesDeux,
    listeQuestionsSpeUn,listeQuestionsSpeDeux);
    
    /** tableau de String contenant les aides contextuelles */
    var aides = [quizz.questionsGeneraleUn[0].aideQuestion,
    quizz.questionsGeneraleUn[1].aideQuestion,
    quizz.questionsGeneraleUn[2].aideQuestion,
    quizz.questionsSpeUn[0].aideQuestion,
    quizz.questionsSpeUn[1].aideQuestion,

    quizz.questionsGeneraleDeux[0].aideQuestion,
    quizz.questionsGeneraleDeux[1].aideQuestion,
    quizz.questionsGeneraleDeux[2].aideQuestion,
    quizz.questionsSpeDeux[0].aideQuestion,
    quizz.questionsSpeDeux[1].aideQuestion,"fin"];
    
    /** tableau de questions */
    var questions = [
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
     
    /**pour la premiere question*/
    var reponseJuste = "oui"; 

    /**pour les autres questions, on récupère la bonne réponse*/
    if (indiceRep > 0) {
        for(let i = 1; i<2; ++i) {
            if(questions[indiceRep-1].bonOuMauvaisUn == 'bon') {
                reponseJuste = questions[indiceRep-1].reponseUn;
            }
            if(questions[indiceRep-1].bonOuMauvaisDeux == 'bon') {
                reponseJuste = questions[indiceRep-1].reponseDeux;
            }
            if(questions[indiceRep-1].bonOuMauvaisTrois == 'bon') {
                reponseJuste = questions[indiceRep-1].reponseTrois;
            }
            if(questions[indiceRep-1].bonOuMauvaisQuatre == 'bon') {
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




/**Partie permettant l'ouverture et la fermeture de l'onglet du bot d'aide */
let chat = false;
/**Fonction fermant le bot */
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


/**Fonction ouvrant le bot après un certain temps*/
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

/**Fonction qui ouvre ou ferme le bot selon la situation actuelle du bot*/
function ouvrirFermerBot () {
    if (chat === true){
        fermerBot();
    }else{
        ouvrirBot();
    }
}













function gestionReponseSelectionneMobile(idBoiteRep){ // fonction gestion des la couleur des boutons selectionnés
    var colBout1 = document.getElementById('rep1Mobile').style.backgroundColor;
    var colBout2 = document.getElementById('rep2Mobile').style.backgroundColor;
    var colBout3 = document.getElementById('rep3Mobile').style.backgroundColor;
    var colBout4 = document.getElementById('rep4Mobile').style.backgroundColor;
    var couleurBoutons = [colBout1,colBout2,colBout3,colBout4];

    var s = document.getElementById(idBoiteRep).style.backgroundColor;
    if(s == "rgb(0, 183, 233)"){
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
    else if(s == "rgb(255, 165, 0)"){
        document.getElementById(idBoiteRep).style.backgroundColor='#00B7E9';
    }
}


/** fonction gérant la réponse validée par l'utilisateur*/
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

/**fonction permettant de mettre à jour la couleur des boutons et le plan selon la réponse validée, on incrémente aussi le score si besoin*/
function cliqueSurValiderMobile(reponseJuste, indiceRep) {
    
    /**on aura besoin de changer la couleur du plan */ 
    let planMobile = document.querySelector('#planMobile');
    
    var stringRep = valideReponseMobile();

    if(indiceRep == 5){
        //a changer for et dictionnaires
        document.getElementById('popup_video').style.display = 'block';
        if(document.getElementById('specialiteMobile').innerHTML=="programmation"){
            document.getElementById('titre_choixVideo').innerHTML = "La programmation : niveau supérieur";
            document.getElementById('PopupProg').style.display = 'block';
            fermerBot();    
        }
        if(document.getElementById('specialiteMobile').innerHTML=="reseaux"){
            document.getElementById('titre_choixVideo').innerHTML = "Le réseau : niveau supérieur";
            document.getElementById('PopupRes').style.display = 'block';
            fermerBot(); 
        }
        if(document.getElementById('specialiteMobile').innerHTML== "web"){
            document.getElementById('titre_choixVideo').innerHTML = "Le web : niveau supérieur";
            document.getElementById('PopupWeb').style.display = 'block';
            fermerBot();    
        }
        if(document.getElementById('specialiteMobile').innerHTML=="bd"){
            document.getElementById('titre_choixVideo').innerHTML = "La base de données : niveau supérieur";
            document.getElementById('PopupBd').style.display = 'block';
            fermerBot();    
        }
        if(document.getElementById('specialiteMobile').innerHTML=="systeme"){
            document.getElementById('titre_choixVideo').innerHTML = "Les systèmes : niveau supérieur";
            document.getElementById('PopupSys').style.display = 'block';
            fermerBot();    
        }
          
            //document.getElementById('titre_choixVideotitre_choixVideo').innerHTML = "Qu'est ce que la programmation ? : https://youtu.be/HSUTiFZB_-Y";
   
    }

    if(indiceRep == 10){
        //a changer
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
            let section = 'th[class="section' + indiceRep + '"]';
            planMobile.querySelectorAll(section).forEach(
                function (currentValue) {
                currentValue.style.backgroundColor = 'green';
                }
            );
        }
        //boucle for
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
    else {

        //coloration du plan
        if (indiceRep >= 1){ //car indice 0 correspond au didactitiel
            let section = 'th[class="section' + indiceRep + '"]';
            planMobile.querySelectorAll(section).forEach(
                function (currentValue) {
                currentValue.style.backgroundColor = 'red';
                }
            );
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
        let section = 'th[class="section' + (indiceRep+1) + '"]';
        planMobile.querySelectorAll(section).forEach(
            function (currentValue) {
            currentValue.style.backgroundColor = '#00B7E975';
        }
        );
    }
        
    document.getElementById('soumettreMobile').innerHTML ="Continuer";
}

/**fonction remettant les boutons a la même couleur,incremente le numero de la question, remet le bot a zero */
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
    //changeQuestionReponse();
    document.getElementById('numMobile').innerHTML = parseInt(document.getElementById('numMobile').innerHTML) + 1;

    fermerBot();
    changeAideQuestion(aides,indiceRep);
    ouvrirBot();

    //if fin du jeu
}

/**fonction qui charge les questions, les indices, agit de deux manières, si on a répondu ou non*/
function cliqueValiderOuContinuerMobile(idBoiteRep){ 
    //et si on veut continuer    
    //var questions = attribueQuestions();
    let indiceRep =  parseInt(document.getElementById('numMobile').innerHTML);

    //a faire en fonction
    listeNomSpe=["web","programmation","reseaux","bd","systeme"];

    for(let i=0;i<5;++i) {
        if(document.getElementById("specialiteMobile").innerHTML==listeNomSpe[i]) {
            listeQuestionsSpeUn=[listeQuestionsToutesSpeUn[i][0],listeQuestionsToutesSpeUn[i][1]];
            listeQuestionsSpeDeux=[listeQuestionsToutesSpeDeux[i][0],listeQuestionsToutesSpeDeux[i][1]];
        }
            
        
    }
    /**creation du quizz */
    quizz = new Quizz(listeQuestionsGeneralesUn,listeQuestionsGeneralesDeux,
    listeQuestionsSpeUn,listeQuestionsSpeDeux);
    
    /** tableau de String contenant les aides contextuelles */
    var aides = [quizz.questionsGeneraleUn[0].aideQuestion,
    quizz.questionsGeneraleUn[1].aideQuestion,
    quizz.questionsGeneraleUn[2].aideQuestion,
    quizz.questionsSpeUn[0].aideQuestion,
    quizz.questionsSpeUn[1].aideQuestion,

    quizz.questionsGeneraleDeux[0].aideQuestion,
    quizz.questionsGeneraleDeux[1].aideQuestion,
    quizz.questionsGeneraleDeux[2].aideQuestion,
    quizz.questionsSpeDeux[0].aideQuestion,
    quizz.questionsSpeDeux[1].aideQuestion,"fin"];
    
    /** tableau de questions */
    var questions = [
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
     
    /**pour la premiere question*/
    var reponseJuste = "oui"; 

    /**pour les autres questions, on récupère la bonne réponse*/
    if (indiceRep > 0) {
        for(let i = 1; i<2; ++i) {
            if(questions[indiceRep-1].bonOuMauvaisUn == 'bon') {
                reponseJuste = questions[indiceRep-1].reponseUn;
            }
            if(questions[indiceRep-1].bonOuMauvaisDeux == 'bon') {
                reponseJuste = questions[indiceRep-1].reponseDeux;
            }
            if(questions[indiceRep-1].bonOuMauvaisTrois == 'bon') {
                reponseJuste = questions[indiceRep-1].reponseTrois;
            }
            if(questions[indiceRep-1].bonOuMauvaisQuatre == 'bon') {
                reponseJuste = questions[indiceRep-1].reponseQuatre;
            }

        }
       
    }

    if (document.getElementById('soumettreMobile').innerHTML == "Valider") {
        cliqueSurValiderMobile(reponseJuste, indiceRep);
    }
    /**si on a fini de répondre, on remet tout à zéros */ 
    else {
        reinitialiseBoutonsMobile(aides,questions,indiceRep);    
        if(document.getElementById('popup_video').style.display != 'none') {
            document.getElementById('popup_video').style.display = 'none';

        }
    }  
}

function afficherCarte() {
    if(document.getElementById('planMobile').style.display != 'initial') {
        document.getElementById('planMobile').style.display = 'initial';
    }
    else {
        document.getElementById('planMobile').style.display = 'none';
    }
}