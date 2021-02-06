
<html>
    <head>
        <h1> Reading and Writing with Files in PHP </h1>
    </head>
    <body>
        <?php
            // Reading a file
            $fpath = "D:\DESKTOP-1S7D2TD\qcaij\Desktop\Personal Website\PHP Practice\sample.txt";
            $file = fopen($fpath, "r");

            if($file == FALSE) {
                echo "Error, the file " . end(explode("\\", $fpath)) . " could not be opened<br>\n";
                exit();
            }

            $fs = filesize($fpath);
            $ftext = fread($file, $fs);
            fclose($file);

            echo "filesize: $fs <br>\n";
            echo "<pre> $ftext </pre><br>\n";

        ?>

        <?php
            // Writing a file

            $newPath = "D:\DESKTOP-1S7D2TD\qcaij\Desktop\Personal Website\PHP Practice\output.txt";
            $file = fopen($newPath, "w");

            if($file == FALSE) {
                echo "Error, the file " . end(explode("\\", $fpath)) . " could not be opened<br>\n";
                exit();
            }

            fwrite($file, "I don't know what to say honestly...\n");
            fclose($file);

            // Checking for file creation and write
            $file = fopen($newPath, "r");

            if($file == FALSE) {
                echo "Error, the file " . end(explode("\\", $newPath)) . " could not be opened<br>\n";
                exit();
            }

            $fs = filesize($newPath);
            $ftext = fread($file, $fs);
            fclose($file);

            echo "filesize: $fs <br>\n";
            echo "<pre> $ftext </pre><br>\n";
        ?>

    </body>
</html>

