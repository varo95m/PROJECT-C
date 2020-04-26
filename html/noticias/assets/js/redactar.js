function anadir(arg){
    texto = document.getElementById("texto");
    if(arg==0){
        texto.value = texto.value + "[title][/title]";
    }else if(arg==1){
        texto.value = texto.value + "[b][/b]";
    }else if(arg==2){
        texto.value = texto.value + "[i][/i]";
    }else if(arg==3){
        texto.value = texto.value + "[u][/u]";
    }else if(arg==4){
        texto.value = texto.value + "[left][/left]";
    }else if(arg==5){
        texto.value = texto.value + "[center][/center]";
    }else if(arg==6){
        texto.value = texto.value + "[right][/right]";
    }else if(arg==7){
        
    }else if(arg==8){
        texto.value = texto.value + "[img][/img]";
    }
}
function getSelec(){
    var algo = document.getSelection();
    texto = document.getElementById("texto");
    texto.value = algo;
}