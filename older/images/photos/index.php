<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="http://xoc.dk/older/style/photo.css" />
    <title>
      Camillog - photos
    </title>
  </head>
  <body>
  <h1>
    Photos
  </h1>
    <p align="right">
      <small>Last update: <? echo date("j/n Y", filemtime("index.php"));?></small>
    </p>  
<?PHP

  showPic("Gloved feet", "Feet.png", "I got these socks from Signe and Angelique. They are just so wonderful to wear. They somehow gives an individual personality to each toe. And yes, I know.. I have fat toes.");
  showPic("Optical illusion", "Ceiling.png", "Funny how I really believed that the ceiling was white before I started painting it with.. White");
  
  

?>    
  </body>
</html>

<?PHP

  function showPic($headline, $photoFileName, $text)  {
    echo "<h3>\n" . $headline . "</h3>\n";
    echo "<img src=\"" . $photoFileName . "\" alt=\"" . $photoFileName . "\" />\n";
    echo "<p class=\"small\"> \n Uploaded: " .  date("j/n Y", filemtime($photoFileName)) . "\n</p>";
    echo "<p>\n" . $text . "\n</p>\n";
  }

?>