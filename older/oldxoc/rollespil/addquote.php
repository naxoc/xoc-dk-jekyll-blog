<?php
require("../skabelon.php");
top("Tilføj et citat");
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
Her kan du indtaste citater fra kampagnen. Det er kun de særligt indviede i De Tres Broderskab,
der har knækket det tophemmelige kodeord. Det kostede Fru McMenny nogen sved på panden og 
Wolfram er fuld af undren. Sullyn mener at kodeordet muligvis er "eurghu".
</p>



<form action="added.php" method="post" name="addquote">
<p>Citat:<br />
<textarea name="quote" cols="40" rows="5"></textarea><br />
Den citeredes navn:<br />
<input type="text" size="30" name="name"><br />
Dit kodeord:<br />
<input type="password" size="30" name="password"><br />
<input type="submit" name="submit" value="Tilføj citat">
</p>
</form>

</td>
</tr>
</table>

<p class="bund">
</p>

<!--Adresselinje !-->
<?php
adresselinje("addquote.php");
?>

