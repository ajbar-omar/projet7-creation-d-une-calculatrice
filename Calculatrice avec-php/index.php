<?php

class Calculatrice{
    private $num1;
    private $num2;
    private $operation;

    function __construct($a,$b,$operation) {
        $this->num1 = $a;
        $this->num2 = $b;
        $this->operation = $operation;
    }
 
    function calculer(){
        $solution = null;
        switch($this->operation){
            case "+" : $solution = $this->num1 + $this->num2;
                break;
            case "-" : $solution = $this->num1 - $this->num2;
                break;

                case "*" : $solution = $this->num1 * $this->num2;
                break;
             
                case "/" : $solution = $this->num1 / $this->num2;
                break;

        }
        return $solution;
    } 

}
   

    // Initialisation des variables
    $num1 = null;
    $num2 = null;
    $operation = null;
    $afficheur = "";
    $solution = null;

    // Traitement

    // Récupération des variables de la page
    if(isset($_POST['num1'])) $num1 = $_POST['num1'];
    if(isset($_POST['num2']))$num2= $_POST['num2'];
    if(isset($_POST['operation'])) $operation = $_POST['operation'];

    // Ajouter la valeur du nombre au X ou Y
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        if($operation == null){
            if($num1 == null) $num1 = $nombre;
            else $num1 = floatval($num1 . $nombre);
        }else{
            if($num2 == null) $num2 = $nombre;
            else $num2 = floatval($num2 . $nombre);
        }
    }

    if(isset($_POST['egale'])){
        $egale = $_POST['egale'];
    
        // Calcule
        $calculatrice = new Calculatrice($num1,$num2,$operation);
        $solution = $calculatrice->calculer($num1,$num2,$operation);
      
    }
    // Affichage 
    
    if(isset($_POST['clear'])){
      
    $num1 = null;
    $num2 = null;
    $operation = null;
    $afficheur = "";
    $solution = null;}
    

    if($solution != null) $afficheur = $solution;
    else{
        if($num1 != null) $afficheur = $afficheur . "$num1" ;
        if($operation != null) $afficheur .= " " .  $operation . " ";
        if($num2 != null) $afficheur .= $num2;
    }
     
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototype calculatrice</title>
   <link rel="stylesheet" href="main.css">
</head>
<body>

<form action="" method="post">
                        <input type="text" name="num1" value="<?php echo $num1 ?>" hidden>
                        <input type="text" name="num2" value="<?php echo $num2 ?>" hidden>
                        <input type="text" name="operation" value="<?php echo $operation ?>" hidden>
            <div id="container">
                <div id="calculator">
                    <div id="result">
                    <input type="text" id="afficheur" name="afficheur" value="<?php echo $afficheur ?>" readonly/>
                    </div>
                    <div id="keyboard">
                        <button type="submit"  name="clear" class="operator" id="clear" value="c">C</button>
                        <button class="operator" id="backspace">CE</button>
                        <button class="operator" id="%">%</button>
                        <button type="submit" name="operation" class="operator" id="/" value="/">/</button>
                        <button type="submit" name="nombre" class="number" id="7" value="7">7</button>
                        <button type="submit" name="nombre" class="number" id="8" value="8">8</button>
                        <button type="submit" name="nombre" class="number" id="9" value="9">9</button>
                        <button type="submit" name="operation" class="operator" id="*" value="*">&times;</button>
                        <button type="submit" name="nombre" class="number" id="4" value="4">4</button>
                        <button type="submit" name="nombre" class="number" id="5" value="5">5</button>
                        <button type="submit" name="nombre" class="number" id="6" value="6">6</button>
                        <button type="submit" name="operation" class="operator" id="-" value="-">-</button>
                        <button type="submit" name="nombre" class="number" id="1" value="1">1</button>
                        <button type="submit" name="nombre" class="number" id="2" value="2">2</button>
                        <button type="submit" name="nombre" class="number" id="3" value="3">3</button>
                        <button type="submit" name="operation" class="operator" id="+" value="+">+</button>
                        <button class="empty" id="empty"></button>
                        <button type="submit" name="nombre" class="number" id="0" value="0">0</button>
                        <button class="empty" id="empty"></button>
                        <button type="submit" name="egale" class="operator" id="=" value="=" >=</button>
                    </div>
                </div>
            </div>

        </form>
</body>
</html>