function setScreen(spe){
    if(spe == 'web'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que le web ?";
        document.getElementById('p_choix').innerHTML = "Le web est ce sur quoi vous êtes actuellement (no joke). Dans le web on utilise différents language comme le HTML pour la mise en page, le CSS pour le style graphique de la page ou encore le javascript pour rendre le site plus dynamique (le javascript se rapproche plus des languages traditionnels, le HTML étant un language balisé) ";
    }
    if(spe == 'reseaux'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que le réseau ?";
        document.getElementById('p_choix').innerHTML = "En réseaux vous étudierez la communication entre machine grâce à différents protocoles comme le TCP, l'UDP où le HTTP. Vous apprendrez aussi à lire des adresses IP ou encore comment créer un serveur et un client.";
    }
    if(spe == 'bd'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que le base de donnée ?";
        document.getElementById('p_choix').innerHTML = "";
    }
    if(spe == 'algo'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que l'algorithmie ?";
        document.getElementById('p_choix').innerHTML = "";
    }
    if(spe == 'jsp'){
        document.getElementById('titre_choix').innerHTML = "En quoi consiste le but Informatique ?";
        document.getElementById('p_choix').innerHTML = "Le monde de l'informatique vous est inconnu ? Vous êtes complètement perdu et ne savez ce que vous faites là (nan sérieux ?) et bien ne vous inquietez pas, vous êtes au bon endroit ! ici les questions seront plus générales et vous permettront de vous donner une idée globale de ce qu'il se fait ici. Voici quelques compétences apprises au cours du cursus : </br> - La base de données / sql </br>- Le réseaux </br>- C++ </br>- Le développement orienté objet </br> Vous en apprendrez aussi plus sur la vie autour de BUT (l'administration, le BDE...)";
    }
    if(spe == 'systeme'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que l'étude des système ?";
        document.getElementById('p_choix').innerHTML = "En système vous apprendrez le fonction bas des machines (le noyaux, les fonctions système, le shell) vous apprendrez comment utiliser un terminal, ce qu'est un dual boot ou encore une VM.";
    }
    document.getElementById('popup').style.display='block'
}

function closeScreen(){
    document.getElementById('popup').style.display='none'
}

function formConfirme(){
    document.getElementById('confirmeForm').style.display='flex';
}