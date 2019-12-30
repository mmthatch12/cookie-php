<?php
// setting should happen before html code
$expireTime=time()+86400;
echo "Time is ".$expireTime."<br>";
setcookie("Name", "Matt", $expireTime);
setcookie("Age", "24", $expireTime);
// unset cookie 1 you can make the time expire
$expireTime_Unset=time()-86400;
// setcookie("Name", "Matt", $expireTime_Unset);
if(isset($_COOKIE['Name'])){
    echo 'Cookie is set with the Name of '.$_COOKIE['Name'];
} else {
    echo "Cookie is not set";
}

setcookie("Name", null);
// You can give it a null value

?>

<!DOCTYPE>
<html>
    <head>
        <title>Setting Cookie</title>
    </head>
    <body>

    </body>
</html>