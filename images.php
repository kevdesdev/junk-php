<pre>

<?php
  $images_folder = $_SERVER["DOCUMENT_ROOT"] . "/images";
  $images_list = array_diff(scandir($images_folder), array('..', '.'));

  foreach ($images_list as $img) {
    //echo md5($img . time()) . '<br>';
  }
  echo dirname();
?>

</pre>

<?php
  foreach ($images_list as $image) {
      echo placeImage("images/", $image);
  }  

  unset($image);
?>

<?php
  function placeImage ($path, $url) {
    $width = "200px";
    $img_template = '<img src="' . $path . $url . '" width="' . $width . '" />';
    
    return  $img_template;
  }
?>