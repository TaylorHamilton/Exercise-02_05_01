<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  
        Author: Jordan Gillispie
        Date: 11/17/2020
        Assignment: Files & Perms
    -->
    <title>Visitor Feedback 2</title>
</head>
<body>
    <h2>Visitor Feedback 2</h2>
    <?php
        $dir = "./comments";
        if(is_dir($dir)) {
            $commentFiles = scandir($dir);
            foreach ($commentFiles as $fileName) {
                if ($fileName !== "." && $filename !== "..") {
                    echo "From <strong>$fileName</strong><br>";
                    echo "<pre>\n";
                    $comment = readfile($dir . "/" . $fileName);
                    echo $comment;
                    echo "</pre>\n";
                    echo "<hr>\n";
                }
            }
        }
    ?>
</body>
</html>