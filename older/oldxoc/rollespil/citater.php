<?php
require("../skabelon.php");
top("Citater fra rollespil");
?>
<h1>
	<img src="../images/add-logo.gif" alt="AD&amp;D"><br />
	<img src="../images/add-headline.gif" alt="AD&amp;D">	 
</h1>
<?php
navigator();
?>
<p>
	<br />
	Jeg spiller med i en rollespilskampagne som <a href="http://www.sanneharder.dk">
	Sanne Harder</a> har lavet. 
	Den hedder (vist nok bare) AD&amp;D-nostalgia. Du kan l�se mere om den p� Sannes hjemmeside, 
	hvor kampagnen er be�ret med sin egen <a href="http://www.sanneharder.dk/kampagne/kampagne.php">
	hjemmeside</a>.<br />
	P� denne side kan du l�se de guldkorn spillerne kommer med p� en almindelig aften i citatform.<br />
	<br />
	Hvis du er en af spillerne kan du tilf�je et citat <a href="addquote.php">her</a><br /><br />
</p>

<?PHP
$data = file('quotes.txt');
$data = array_reverse($data);
foreach($data as $element) {
    $element = trim($element);
    $pieces = explode("|", $element);
    echo "<img src=\"../images/greenline.gif\" alt=\"Gr�n streg\"><p class=\"rollespilscitat\"><i>" . $pieces[2] . "</i><br />\n - " . $pieces[1] . " -\n</p>";
}
?>

</td>
</tr>
</table>

<p class="bund">
</p>

<!--Adresselinje !-->
<?php
adresselinje("citater.php");
?>



