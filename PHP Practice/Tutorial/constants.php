
<html>
    <head>
        <h1> Constants </h1>
    </head>
    <body>
        <?php
          // Constants
          define("LUCKY", 7);
          echo "LUCKY: " . LUCKY . "<br>\n";
          echo "LUCKY: " . constant('LUCKY') . "<br>\n";

          // Magic constants
          echo "LINE: " . __LINE__ . "<br>\n";
          echo "FILE: " . __FILE__ . "<br>\n";

          function add($a, $b) {
             echo "FUNCTION: " . __FUNCTION__ . "<br>\n";
             return $a + $b;
          }
          echo add(10, 8);

          class Show
          {
             public $title;
             public $creators;

             static function printClassName() {
                echo "CLASS: " . __CLASS__ . "<br>\n";
             }

             function sampleFunc() {
                echo "METHOD: " . __METHOD__ . "<br>\n";
             }
          }

          $st = new Show("Stranger Things", "Duffel Brothers");
          Show::printClassName();
          $st -> sampleFunc();
       ?>
    </body>
</html>

