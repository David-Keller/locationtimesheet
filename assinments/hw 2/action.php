<?php
$oldName = $_POST["Name"];
$shiftValue = $_POST["offset"];
$newName = "";


//perform the shift on each letter of the string

if($_POST["reverse"] == 'Yes'){
    $shiftValue *= -1;
}
for($i = 0 ; $i < strlen($oldName) ; $i++){
    $char = ord($oldName[$i]);
    if($char <= ord('z') && $char >= ord('a')){
        //char is a lower case letter
        $char -= ord('a');
        
        $char += $shiftValue;
        $char = $char % 26;
        $char = $char + ord('a');
    }
    
    else if($char <= ord('Z') && $char >= ord('A')){
        //char is a upper case letter
        $char -= ord('A');
        
        $char += $shiftValue;
        $char = $char % 26;
        $char = $char + ord('A');
    }
    else{
        //char is a symbole
    }
    echo(" ");
    $newName .= chr($char);
}
echo($newName);
?>