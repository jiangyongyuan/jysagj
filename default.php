<?php
function PMA_getenv($var_name) { 
	if (isset($_SERVER[$var_name])) { 
	return $_SERVER[$var_name]; 
	} elseif (isset($_ENV[$var_name])) { 
	return $_ENV[$var_name]; 
	} elseif (getenv($var_name)) { 
	return getenv($var_name); 
	} elseif (function_exists('apache_getenv') 
	&& apache_getenv($var_name, true)) { 
	return apache_getenv($var_name, true); 
	} 
	return ''; 
} 
if (empty($HTTP_HOST)) { 
	if (PMA_getenv('HTTP_HOST')) { 
	$HTTP_HOST = PMA_getenv('HTTP_HOST'); 
	} else { 
	$HTTP_HOST = ''; 
	} 
} 
$yuming = htmlspecialchars($HTTP_HOST); 

if($yuming=='www.lvshanggu.com'){
  echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
  echo "<title>深圳市绿尚谷实业发展有限公司</title><frameset cols=* frameborder=NO border=0 framespacing=0><frame src='/lvshanggu/'></frameset>";
}elseif($yuming=='lvshanggu.com'){
  echo "<meta http-equiv='refresh' content='0;URL=http://www.lvshanggu.com/' />"; 		
}else{
  include('index.html'); 		
}
?>
