<?php
function e7061($e){
	$ed = base64_decode($e);
	$n = openssl_decrypt("$ed","AES-256-CBC","1234567890123456",0,"1234567890123456");
	return $n;
}
?>
