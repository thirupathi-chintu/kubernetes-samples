<html>
  <head>
    <title>PHP Hello World!</title>
  </head>
  <body>
    <?php echo '<h1>Hello World</h1>'; ?>
    <?php
       require './vendor/autoload.php';
       use Carbon\Carbon;

       printf("I'm %s", Carbon::createFromDate(1992, 5, 9)->age);
	 ?>
  </body>
</html>
