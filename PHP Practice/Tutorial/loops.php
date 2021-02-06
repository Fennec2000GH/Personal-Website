
<html>
    <head>
        <h1> Loops </h1>
    </head>
    <body>
        <?php
          $init = 0;
          for($i = 1; $i <= 20; $i++) {
             $init += $i;
          }
          echo "Sum of first 20 positive integers is {$init}<br>\n";

          $init = 1;
          while($init % 4 <> 0) {
             $init = rand(1, 10);
             echo "{$init}<br>\n";
          }
          echo "final number: {$init}<br>\n";

          $init = 0;
          echo "Counting to 10: ";
          do {
             ++$init;
             echo $init . " ";
          } while($init < 10);

          $cars = array("Mercedez", "Audi", "Honda", "Toyota", "Nio", "Tesla");
          echo "<br>\nCar brand names: ";
          foreach($cars as $v) {
             echo $v . " ";
          }
          echo "<br>\n";
       ?>
    </body>
</html>

