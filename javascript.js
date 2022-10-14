function setScreen(spe){
    if(spe == 'web'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que le web ?";
    }
    if(spe == 'reseaux'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que le réseau ?";
    }
    if(spe == 'bd'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que le base de donnée ?";
    }
    if(spe == 'algo'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que l'algorithmie ?";
    }
    if(spe == 'jsp'){
        document.getElementById('titre_choix').innerHTML = "En quoi consiste le but Informatique ?";
    }
    if(spe == 'systeme'){
        document.getElementById('titre_choix').innerHTML = "Qu'est ce que l'étude des système ?";
    }
    document.getElementById('popup').style.display='block'
}

function closeScreen(){
    document.getElementById('popup').style.display='none'
}