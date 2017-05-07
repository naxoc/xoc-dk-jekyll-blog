<?
	include("../functions/func.inc.php");
	HTMLheader();
	leftSide(); 
?>
<div id="content">

<div class="box">
		<h1>
			My movie reviews
		</h1>
<?	
		movies();		
?>
	</div>
	</div>
<?  
    foot("movies");   
/*---------------------------------------MOVIES----------------------------------------
    
----------------------------------------------------------------------------------------*/
  function movies() {
    openDB();   
    
    $movies = mysql_query("SELECT * FROM movies ORDER BY id DESC");
    
    while ($data = mysql_fetch_array($movies))  {
      echo "<h4>" . $data["title"] . "</h4>\n";
      echo "<p class=\"ten\">\nActors: " . $data["actors"] . "<br />\n";
      echo "Year: " . $data["year"] . "<br />\n";
      echo "Reviewed: " . $data["added"] . "</p>\n";
      echo "<p>" . $data["review"] . "</p>\n<br />\n<br />\n";
      
    }
      
    mysql_close();
  }
?>