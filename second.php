<?php
if(isset($_POST["submit"]))
{
$f=fopen("data.txt","a");
fwrite($f,$_POST["name"]." \n".$_POST["sms"]." \n");
fclose($f);
}
?>
