<?php

function top($titel) {

$html = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
<head>
<title>$titel</title>
<meta name=\"author\" content=\"Camilla Krag Jensen\">
<meta name=\"keywords\" content=\"webdesign, meninger, citater, freebord, rollespil\">
<meta name=\"language\" content=\"dan\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"http://xoc.dk/older/oldxoc/stil.css\">
</head>
<body>
";

   echo $html;
}

function adresselinje($filename)	{
	echo 	"<address>
	<br />
	Camilla Krag Jensen<br />
	<a class=\"mail\" href=\"mailto:camilla(a)xoc.dk\">camilla(a)xoc.dk</a>
	<br />";
	$last_modified = filemtime($filename);
	print("Senest ændret for virkelig lang tid siden");
	//print(date("j/n Y", $last_modified));
	echo "<br />
	</address>\n</body>\n</html>";
}

#Læser to linjer fra en fil og skriver dem til klienten
function citat()	{
	$citatfil = file("Citater.dut"); 	//læser hele filen ind i et array

	$antal_linjer = count($citatfil); 	//taller antallet af linjer (arraypladser)

	$random_number = rand(1,$antal_linjer); 	//genererer et tal mellem 0 og antallet af linjer i filen
	$moduleret = $random_number % 2;	//modulerer random_number med 2

	if ($moduleret == 0) {									//sørger for at der læses en --
		$random_number = $random_number - 1;	//ulige linje i filen først
	} 
	echo "<p class=\"citat\">".$citatfil[$random_number]."<br />\n".$citatfil[$random_number + 1]."</p>";
}


function navigator()	{
	$nav = 	"<table><tr valign=\"top\"><td class=\"left\">
<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/default.php\"><strong>Forsiden</strong></a><br />
<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/camilla/camillassider.php\"><strong>Camillas sider</strong></a><br />
<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/camilla/mening.php\">Det mener jeg!</a><br />
<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/camilla/stolt.php\">Ting jeg er stolt af</a><br />
<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/camilla/sprog.php\">Det danske sprog</a><br />
<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/aboutxoc/omxoc.php\"><strong>Om xoc.dk</strong></a><br />
<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/aboutxoc/webdesign.php\">Webdesign</a><br />
<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/aboutxoc/baddesign.php\">Dårligt webdesign</a><br />

<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/aboutxoc/mspaint.php\">MSPaint</a><br />
<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/links.php\"><strong>Links</strong></a><br />
<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/freebord/freebord.php\"><strong>Freebord</strong></a><br />
<a class=\"navigation\" href=\"http://xoc.dk/older/oldxoc/rollespil/citater.php\"><strong>Rollespilscitater</strong></a><br />
</td>
<td class=\"right\"><p align=\"right\">";
	echo $nav;
}

function rollespilscitater()	{
	$fil = file("rollespilscitater.dut"); 	//læser hele filen ind i et array
	
	$i = 0; 
 	while ($i < count($fil))	{
 	if ($fil[$i] == 1)	{ //super low-tech test for andet end et citat
 			echo "<h3>".$fil[$i +1]."</h3><br />";
 			$i = $i + 2;
 		}
	echo "<p><i>".$fil[$i]."</i><br />\n".$fil[$i +1]."</p>";
	$i = $i + 2;
	}
}
?>
