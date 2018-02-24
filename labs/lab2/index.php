<?php
function randomArray(){
    $arr = array();
    for($i = 0; $i < 3; $i++){
        $arr[$i] = rand(0,3);
    }
    return $arr;
}
function compare($arrInput){
    for($i = 1; $i < count($arrInput); $i++){
        if($arrInput[$i] != $arrInput[$i - 1]){
            return false;
        }
    }
    return true;
}
function imgReplace($imgNum){
    switch ($imgNum) {
        case 0:
            // code...
            break;
        case 1:
            // code...
            break;
        case 2:
            // code...
            break;
        case 3:
            // code...
            break;
        
        default:
            // code...
            break;
    }
}

$testArray = array(0,1,0);
var_dump(compare($testArray));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            slot machine
        </title>
    </head>
    <body>
        
    </body>
    
</html>