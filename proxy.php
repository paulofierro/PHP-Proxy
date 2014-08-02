<?php
	// PHP Proxy
	// Loads a XML from any location. Used with Flash/Flex apps to bypass security restrictions
	// Author: Paulo Fierro
	// January 29, 2006
	// usage: proxy.php?url=http://mysite.com/myxml.xml
 
	$session = curl_init($_GET['url']);
	curl_setopt($session, CURLOPT_HEADER, false);
	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
	// If you need to send a user agent, you can set it here
	//curl_setopt($session, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	$xml = curl_exec($session);
	header("Content-Type: text/xml");
	echo $xml;
	curl_close($session);
?>
