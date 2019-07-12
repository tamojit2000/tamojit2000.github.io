<?php
if(isset($_POST["submit"]))
{
$f=fopen("tamojit2000.github.io//data.txt","a");
fwrite($f,$_POST["name"]." \n".$_POST["sms"]." \n");
fclose($f);
}
?>
