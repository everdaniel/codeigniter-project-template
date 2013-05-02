<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $template['title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $template['metadata'] ?>
  </head>

  <body class="<?php echo $body_class ?>">
    <?php echo $template['partials']['header'] ?>

    <div class="container">

      <?php echo $template['partials']['flash_messages'] ?>

      <?php echo $template['body'] ?>

      <?php echo $template['partials']['footer'] ?>

    </div> <!-- /container -->
    
  </body>
</html>