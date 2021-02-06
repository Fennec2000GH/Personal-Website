
<html>
    <head>
        <h1> Writing PHP Functions </h1>
    </head>
    <body>
        <?php
            // Defining a function with PHP
            function writeSomething() {
                echo "This is a randome message.<br>\n";
            }
            writeSomething();

            function writeAndReturn(string $message) : string {
                echo $message . "<br>\n";
                return $message;
            }
            $retMessage = writeAndReturn(message: "Custom message returned");
            echo $retMessage;

            function defaultParams(string $message = "Number chosen: ", int $num = 12) : string {
                $completeMessage = $message . $num . "<br>\n";
                echo $completeMessage;
                return $completeMessage;
            }
            $retMessage = defaultParams();

            $numCounter = 0;
            function incrementByRef(int &$num) : int {
                $num++;
                return $num;
            }
            $newCounter = incrementByRef(num: $numCounter);
            assert($numCounter == $newCounter);

            function writeWithVarArgs(string $firstMessage, mixed ...$args) {
                echo "Messages given: " . $firstMessage;
                foreach($args as $arg) {
                    echo " " . $arg;
                }
                echo "<br>\n";
            }
            call_user_func_array("writeWithVarArgs", ["List: ", 1, 2, 4, 8]);

            function getParamsExample(int $intVar, float $floatVar) {
                echo "intVar: $intVar, floatVar: $floatVar<br>\n";
                echo "Arguments list: " . print_r(value: func_get_args(), return: FALSE) . "<br>\n";
            }
            getParamsExample(intVar: 1, floatVar: 1.00);
        ?>
    </body>
</html>

