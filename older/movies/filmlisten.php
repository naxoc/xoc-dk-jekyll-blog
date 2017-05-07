<?PHP
$film2006 = array(
"Alle de film jeg har set i år"
);	
$film2005 = array(
"Finding Neverland",
"Charlie's angels II",
"Fahrenheit 9/11",
"Mod muren",
"Pusher II",
"First Knight",
"Bridget Jones Dagbog 2",
"Familien Gregersen",
"Along came a Spider",
"Americas Sweethearts",
"The Mighty"
);	
sort($film2005);
//
$film2004 = array(
"The Dangerous Lives of Altar Boys",
"Dreamcatcher",
"Igby goes down",
"Lilja 4-ever",	
"The Prince & Me",	
"Mala education. (Dårlig dannelse)",
"Salmer fra køkkenet",	 	
"Kops",
"De Grønne Slagtere",
"Og Din Mor",
"Maria full of grace",
"Motorcykeldagbogen",
"Evigt solskin i et pletfrit sind",
"Mulholland Drive",
"Kika",
"Prozac Nation",
"The day before tomorrow",
"Donnie Darko",
"Dune",
"Spiderman 2",
"Deep Blue Sea",
"Sekretæren",
"The swimming pool",
"Terkel i knibe",
"Someone like you");	
sort($film2004);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da">
<head>
  <title>
    Filmlisten
  </title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <link rel="stylesheet" type="text/css"
href="http://xoc.dk/older/style/minima.css" />

</head>
<body>

<div id="mybox">

    <div id="header">
      <h1 id="blog-title">
       
        <a href="http://xoc.dk/older">Camillog</a>
       
      </h1>
    <p id="description">
      Nu på dansk!!
    </p>
  </div>

 
  <!-- Begin #content -->
  <div id="content">
 
  <!-- Begin #main -->
  <div id="main">
  <div id="main2">
<h3 class="post-title">Filmlisten</h3>

<a name="2006"></a><h2>2006</h2>
<ul>
<?PHP

foreach ($film2006 as $film) {
	echo "\n<li>\n<b>" . $film . "</b>\n</li>\n";
}
?>
</ul>

<a name="2005"></a><h2>2005</h2>
<ul>
<?PHP

foreach ($film2005 as $film) {
	echo "\n<li>\n<b>" . $film . "</b>\n</li>\n";
}
?>
</ul>

<a name="2004"></a><h2>2004</h2>
<ul>
<?PHP

foreach ($film2004 as $film) {
	echo "\n<li>\n<b>" . $film . "</b>\n</li>\n";
}
?>
</ul>

  </div>
  </div>

  <div id="sidebar"><div id="sidebar2">

<h2 class="sidebar-title">Sidst opdateret: <?PHP echo date("j/n Y",
filemtime("filmlisten.php"));?></h2>
<p>
Jeg ser en del film. Jeg er hamrende dårlig til at se fjernsyn (nyheder, serier,
shows), men jeg elsker at se en film jeg selv har valgt at se. Det gør det mere
til en handling.
</p>
<p>
Jeg har købt et "abonnement" hos <a
href="http://digitatarian.dk">Digitarian</a>, hvor man har en ønskeliste med
film på nettet, og fra den sender de to film af gangen til en. Når man har set
dem sender man dem tilbage og venter pænt på de næste to. Det koster 199 kr om
måneden og jeg tror jeg har sparet penge på det i forhold til at gå i
Blockbuster. Det er jo også ret mageligt at de bliver smidt ind af brevsprækken.
</p>

<ul class="archive-list">
<li></li>
</ul>

<ul id="recently">
<li><a href="http://xoc.dk/older">Hjem</a></li>
<li><a href="#2004">Film set i 2006 [<?PHP echo count($film2006);?>]</a></li>
<li><a href="#2004">Film set i 2005 [<?PHP echo count($film2005);?>]</a></li>
<li><a href="#2004">Film set i 2004 [<?PHP echo count($film2004);?>]</a></li>
<li><a href="../books/boglisten.php">Boglisten</a></li>
</ul>
 
</div>

</div>
</div>
</div>
</body>
</html>