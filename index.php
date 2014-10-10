<ul>
  <li><a href="/home">home</a></li>
  <li><a href="/gallery">gallery</a><?php loadGalleryNav() ?></li>
  <li><a href="/contact">contact</a></li>
  <li><a href="/about">about</a></li>
  <li><a href="/jstest">jstest</a></li>
</ul>


<?php

  if (isset($_GET["page"])) {
    $page = $_GET["page"];
  
  $sections = explode("/", $_GET["page"]); 
    
    switch($sections[0]) {
      case "gallery":
        if (isset($sections[1])) {
          $width = $sections[1];
        } else {
          $width = null;
        }
      
        echo loadImg($width);
        break;
      
      case "jstest":
        echo "<div id='jstest'>";
        echo "<b>loading...</b>";
          include "jstest.php";
        echo "</div>";
        break;
      default:
        echo $page;
    }
    
  } else {
    echo "page not found";
  }

function loadGalleryNav () {
  if (isset($_GET["page"]) && $_GET["page"] == "gallery") {
  echo "  | 
        <a href='/gallery/100'>100</a> | 
        <a href='/gallery/200'>200</a> | 
        <a href='/gallery/300'>300</a> |
        <a href='/gallery/400'>400</a> |
        ";
  }
}

function loadImg ($width) {
  $img = "http://media.caranddriver.com/images/media/51/dissected-lotus-based-infiniti-emerg-e-sports-car-concept-top-image-photo-451994-s-original.jpg";
  
  return "<img src='$img' width='$width' />";
}
?>

<script>
</script>



<p>
  
<pre>
<?php
  echo count($_REQUEST);
  if (isset($_REQUEST["width"])) {
    echo "width exist";
  } else {
    echo "noooooo";
  }

?>
</pre>
  
