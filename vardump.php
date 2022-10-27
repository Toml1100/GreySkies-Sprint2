<!-- Final Page that print out all the info from all the previous pages -->
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
  <?php echo '<p>POST</p>'; ?>
  <?php echo var_dump($_POST); ?>
  <?php echo '<br>'; ?>
  
  <?php echo '<p>GET</p>'; ?> 
  <?php echo var_dump($_GET); ?> 
 </body>
</html>