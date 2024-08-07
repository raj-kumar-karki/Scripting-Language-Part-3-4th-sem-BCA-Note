<?php 
	session_start();  //session start chai garnai parxa 

	session_unset();   //orange lai hatako   seession : favcolor == orange

	session_destroy();

	echo "session id destroy.";

?>