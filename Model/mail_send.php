<?php


function Send_mail(){

$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			
		</div>
	</body>
</html>
';

mail("freddyadjh@gmail.com", "Salut tout le monde !", $message, $header);
}



}