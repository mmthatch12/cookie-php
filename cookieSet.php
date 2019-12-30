<!DOCTYPE>
<html>
    <head>
        <title>Setting Cookie</title>
    </head>
    <body>
<?php 
$expireTime=time()+86400;
echo "Time is ".$expireTime."<br>";
setcookie("Name", "Matt", $expireTime);
setcookie("Age", "24", $expireTime);
// print_r($_COOKIE);
echo "My name is ".$_COOKIE["Name"]." and I am ".$_COOKIE["Age"];

?>



    </body>
</html>