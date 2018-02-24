<?php 
  $ran1 = rand(1,10);
  $ran2 = rand(1,10);
  $try;
  

  
  function sumbitNum($input){
      echo "$input";
  }
    function sumbitNum2(){
      echo "test2";
  }
  
    if($_GET){
    if(isset($_Get['guessForm'])){
        sumbitNum($_POST['number1']);
    }elseif(isset($_POST['giveUp'])){
        sumbitNum2();
    }
}
?>

<!DOCTYPE html>
<html><head>
        <title>Guess the Numbers</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <blockquote>
        <h1> Guess the Numbers </h1>
        <h3> Guess two numbers between 1 and 10!</h3>
        <form>
            
            Number 1: <input type="text" name="number1">
            <br>
            Number 2: <input type="text" name="number2">
            <br><br>
            <input type="submit" value="Guess Numbers" name="guessForm">
            <br><br>
             <input type="submit" value="Give Up" name="giveUp">
             <input type="submit" value="Reset" name="reset">
            
        </form>
        
        <?php
        
        ?>
        <br><hr>Number of tries: 4<br>You've guessed the first number! <br>You've guessed the second number! <br>        </blockquote>
    
</body></html>