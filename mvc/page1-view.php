<?php
  if (!defined('CONTROLLER_LOADED')) {
    exit;
  }
?>

<html>
   <body>
     hello <?php echo $data["name"]; ?>! | <b> <?php echo $data["date"] ?> </b>
     <p>
        <?php echo $data["message"]; ?>
     </p>
  </body>
</html>