
let xString , yString;
let calculatrice =new CalculatriceBLO();

function ClickNumber(number){
    if (calculatrice.operation == undefined){
        
        if (xString == undefined) xString = '';
              xString += number;
    }else{
        
        if (yString == undefined) yString = '';
                  yString += number;
        }

        afficher();
}
    function afficher(number){
        let afficheur = document.getElementById("afficheur");
        afficheur.value = "" ;

        
        if (calculatrice.x != undefined && calculatrice.y != undefined && calculatrice.operation != undefined )
            {
           
                afficheur.value += number;
       
            }else {
            if (xString != undefined)
            afficheur.value += xString;
            if (calculatrice.operation != undefined)
            afficheur.value += calculatrice.operation;
            if (yString != undefined)
            afficheur.value += yString;
    }  
}

function operation(operationParam){
        if(calculatrice.operation == undefined){
    calculatrice.operation = operationParam;

    afficher();
    }else{
    alert("vous avez déja choisi l'operation+calculatrice.operation");
    }
}
 
function Egale(){
     calculatrice.x=parseFloat(xString);
     calculatrice.y=parseFloat(yString);
     calculatrice.calculatrice();
     afficher(calculatrice.solution);
 }

 
 function Init(){
     calculatrice.Init();
     xString=undefined;
     yString=undefined;
     let afficheur=document.getElementById("afficheur")
     afficheur.value="";
 }





