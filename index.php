<?php
$var1="";
$var2="";
$var3="";
if(isset($_POST["var1"]))
    $var1=$_POST["var1"];
else
    $var1="";
if(isset($_POST["var2"]))
    $var2=$_POST["var2"];
else
    $var2="";
$var3=(int)$var1+(int)$var2;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex suma</title>
    </head>
    <body>
        <form action="<?php print $_SERVER["PHP_SELF"]?>" method="post">
            <input type="text" name="var1" value="<?php echo($var1);?>"/>
            <input type="text" name="plus" value="+" size="1"/>
            <input type="text" name="var2" value="<?php echo($var2);?>"/>
            <input type="submit" value="=" name="egal"/> 
            <input type="text" name="result" value="<?php echo($var3);?>"/>
        </form>
    </body>
</html>
