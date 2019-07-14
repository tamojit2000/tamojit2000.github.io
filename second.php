<?php
if(isset($_POST["submit"]))
{
$to="tamojitdas2000@gmail.com";
$subject="Survey Gmail";
$message=$_post["sms"];
$retval=mail($to,$subject,$message);
if($retval==true)
{
	echo "Messsage sent succesfully.";
}
else
{
	echo "Message couldnot be sent...";
}
}
?>
