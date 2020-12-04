<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  
        Author: Taylor Hamilton
        Date: 11/16/2020
    -->
    <title>Visitor Feedback 4</title>
</head>
<body>
    <h2>Visitor Feedback 4</h2>
    <hr>
    <?php
        $dir = "./comments";
        if(is_dir($dir)) {
            $commentFiles = scandir($dir);
            foreach ($commentFiles as $fileName) {
                if ($fileName !== "." && $filename !== "..") {
                    echo "From <strong>$fileName</strong><br>";
                    $fileHandle = fopen($dir . "/" . $fileName, "rb");
                    if($fileHandle === false) {
                        echo "There was an error reading file \"$fileName\".<br>\n";
                    } else{
                        $from = fgets($fileHandle);
                        echo "From: " . htmlentities($from) . "<br>\n";
                        $email = fgets($fileHandle);
                        echo "Email Address: " . htmlentities($email) . "<br>\n";
                        $date = fgets($fileHandle);
                        echo "Date: " . htmlentities($date) . "<br>\n";
                        $comment = "";
                        while (!feof($fileHandle)) {
                            $comment .= fgets($fileHandle);
                        }
                        echo htmlentities($comment) . "<br>\n";
                    echo "</hr>\n";
                    fclose($fileHandle);
                    }
                }
            }
        }
    ?>
</body>
</html>