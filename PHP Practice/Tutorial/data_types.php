
<html>
    <head>
        <h1> Data Types </h1>
    </head>
    <body>
         <?php
             // Data types
             print "Data types in PHP<br>\n";
             $intVar = 1234567890; print "int: $intVar<br>\n";
             $floatVar = 3.141592654; print "float: $floatVar<br>\n";
             $boolVar = TRUE; print "boolean: $boolVar<br>\n";
             $strVar = "snakesss"; print "string: $strVar<br>\n";
             $nullVar = NULL; print "null: $nullVar<br>\n";
             $multiline =<<<_XML_
                <rocket>
                   <capsule> This is a capsule. </capsule>
                   <fuel> Fuel will be solid jet fuel. </fuel>
                   <booster> They don't even work. </booster>
                </rocket>
                _XML_;

             print "<br>\nmultiline: $multiline<br>\n";
        ?>
    </body>
</html>

