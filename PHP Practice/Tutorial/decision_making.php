
<html>
    <head>
        <h1> Decision Making </h1>
    </head>
    <body>
        <?php
          // Decision making
          $number = 12.12;
          if($number <= 25) {
             echo "{$number} is less than 25<br>\n";
          } elseif ($number >= 10) {
             echo "{$number} has at least 2 digits<br>\n";
          } else {
             echo "No clue how to handle {$number}<br>\n";
          }

          $fruit1 = "coconut";
          $fruit2 = "guava";

          function describeFruit(&$fruit) {
             switch($fruit) {
                case "apple":
                   echo "{$fruit}, a personal computer company<br>\n";
                   break;
                case "banana":
                   echo "{$fruit} will make the chimps come after you<br>\n";
                   break;
                case "coconut":
                   echo "hopefully {$fruit} does not fall on your head>br>\n";
                   break;
                default:
                   echo "no clue what {$fruit} is tbh<br>\n";
             }
          }

          describeFruit(fruit: $fruit1);
          describeFruit(fruit: $fruit2);
        ?>
    </body>
</html>

