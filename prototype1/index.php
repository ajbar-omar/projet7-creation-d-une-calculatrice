<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action = "index.php" method = "post">
          <input type = "number" name = "num1" >
          <input type = "number" name = "num2" >
         <input type = "submit" >
      </form>
      <?php
 
 if(isset($_POST['num1'],$_POST['num2'])){
     $num1 = $_POST['num1'];
     $num2 = $_POST['num2'];
 
 $sum = $num1 + $num2;
    echo "La somme des deux nombres est : $sum";
 }
 
 
 ?>
  
</body>
</html>
  

 