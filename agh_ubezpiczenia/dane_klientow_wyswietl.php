<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
    <title>Dane osobowe</title>
</head>
<body>
    
    <table width="500" align="center" border="1" bordercolor="#d5d5d5"  cellpadding="0" cellspacing="0">
        <tr>
			<?php
			include "funkcje.php";
				$polaczenie = Polacz();
				$rezultat = Pobierz_klientow($polaczenie);
				Wyswitl($rezultat);
			?>
		</tr>
	</table>

</body>
</html>

