<?php
require("../skabelon.php");
top("Citatet er (m�ske) tilf�jet");
?>
<h1>
	<img src="../images/add-logo.gif" alt="AD&amp;D"><br />
	<img src="../images/add-headline.gif" alt="AD&amp;D">	 
</h1>
<?php
navigator();
?>

<?php
$checker = 1;
if($HTTP_POST_VARS['submit']) {
    if($HTTP_POST_VARS['password'] == 'orm') {
        if(!$HTTP_POST_VARS['name']) {
            echo "<p><img src=\"../images/exclamation.gif\" alt=\"!\">Du kunne da godt lige skrive hvem der har sagt citatet</p>";
            $checker = 0;
        }
        if(!$HTTP_POST_VARS['quote']) {
            echo "<p> <img src=\"../images/exclamation.gif\" alt=\"!\">Du skal alts� skrive et citat</p>";
            $checker = 0;
        }
        if(strstr($HTTP_POST_VARS['name'],"|")) {
            echo "<p> <img src=\"../images/exclamation.gif\" alt=\"!\">Et navn kan da umuligt indeholde -\" | \". Jeg bruger faktisk det symbol!</p>";
            $checker = 0;
        }
        if(strstr($HTTP_POST_VARS['quote'],"|")) {
            echo "<p> <img src=\"../images/exclamation.gif\" alt=\"!\">Et citat kan da umuligt indeholde -\" | \". Jeg bruger faktisk det symbol!</p>";
            $checker = 0;
        }
        // $fp = fopen('quotes.txt','a');
        if(!$fp) {
            echo "<p> <img src=\"../images/exclamation.gif\" alt=\"!\">Der er g�et kludder i �bningen af filen...</p>";
            $checker = 0;
        }
        if ($checker == 1)	{
        	$line = date("d.m.y") . "|" . $HTTP_POST_VARS['name'];
       	 	$line .= "|" . $HTTP_POST_VARS['quote'];
       	 	$line = str_replace("\r\n","<br />",$line);
       		$line .= "\r\n";
        	fwrite($fp, $line);
        	if(!fclose($fp)) {
          	  echo "<p> <img src=\"../images/exclamation.gif\" alt=\"!\">Fejl ved fors�g p� at �bne filen!</p>";
            	$checker = 0;
        	}  
        	if ($checker == 1) {
    				echo "<p><img src=\"../images/exclamation.gif\" alt=\"!\">Citatet er tilf�jet.</p>";
    			}      
    		}
    } 
    		
    else {
        echo "<p> <img src=\"../images/exclamation.gif\" alt=\"!\">Forkert kodeord. Du skal ikke h�re p� Wolframs forslag!!</p>";
    }
}
?>
<p>
  Du kan g� tilbage til siden hvor du kan <a href="addquote.php">indtaste citater</a>. 
  Eller du kan g� tilbage til siden med alle <a href="citater.php">citaterne</a>.
</p>
</td>
</tr>
</table>

<p class="bund">
</p>

<!--Adresselinje !-->
<?php
adresselinje("added.php");
?>

