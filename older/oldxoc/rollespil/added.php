<?php
require("../skabelon.php");
top("Citatet er (måske) tilføjet");
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
            echo "<p> <img src=\"../images/exclamation.gif\" alt=\"!\">Du skal altså skrive et citat</p>";
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
        $fp = fopen('quotes.txt','a');
        if(!$fp) {
            echo "<p> <img src=\"../images/exclamation.gif\" alt=\"!\">Der er gået kludder i åbningen af filen...</p>";
            $checker = 0;
        }
        if ($checker == 1)	{
        	$line = date("d.m.y") . "|" . $HTTP_POST_VARS['name'];
       	 	$line .= "|" . $HTTP_POST_VARS['quote'];
       	 	$line = str_replace("\r\n","<br />",$line);
       		$line .= "\r\n";
        	fwrite($fp, $line);
        	if(!fclose($fp)) {
          	  echo "<p> <img src=\"../images/exclamation.gif\" alt=\"!\">Fejl ved forsøg på at åbne filen!</p>";
            	$checker = 0;
        	}  
        	if ($checker == 1) {
    				echo "<p><img src=\"../images/exclamation.gif\" alt=\"!\">Citatet er tilføjet.</p>";
    			}      
    		}
    } 
    		
    else {
        echo "<p> <img src=\"../images/exclamation.gif\" alt=\"!\">Forkert kodeord. Du skal ikke høre på Wolframs forslag!!</p>";
    }
}
?>
<p>
  Du kan gå tilbage til siden hvor du kan <a href="addquote.php">indtaste citater</a>. 
  Eller du kan gå tilbage til siden med alle <a href="citater.php">citaterne</a>.
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

