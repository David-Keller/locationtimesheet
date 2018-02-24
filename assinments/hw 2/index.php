<?php
    
?>

<html>
    <head>
        <title> form collection</title>
    </head>
    <body>
        This page will shift only the letters in a input string by the shift value
        
        <form action = "action.php" method = "post">
            Enter a string:
            <input type="text" name="Name"/>
            <br/>
            Enter a shift value:
            <input type="number" name = "offset" />
            <br/>
            Reverse direction?  :
            <input type="checkbox" name ="reverse" value="Yes"/>
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>