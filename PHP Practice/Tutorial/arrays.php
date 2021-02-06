
<html>
    <head>
        <h1></h1>
    </head>
    <body>
         <?php
          // Arrays
          // Numeric arrays (indexed)
          $numArr = array(1, 2, 4, 8, 16, 32);
          foreach($numArr as $num) {
             echo $num . " ";
          }
          echo "<br>\n";

          // Associative arrays
          $profileArr = array("name" => "Arthur", "school" => "UF", "city" => "Gainesville", "major" => "Computer Science");
          foreach($profileArr as $key => $value) {
             echo "({$key}, {$value})<br>\n";
          }
          echo "<br>\n";

          // Multidimensional arrays
          $vehicles = array(
             "trains" => 1000,
             "planes" => 2000,
             "rockets" => 3000
          );
          foreach($vehicles as $x => $y) {
             echo "Original: {$x} => {$y}<br>\n";
             $vehicles[$x] = range(start: 1, end: 10);
          }
          echo $vehicles;

        ?>
    </body>
</html>

