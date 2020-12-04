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
    <title>Visitor Feedback 3</title>
</head>
<body>
    <h2>Visitor Feedback 3/h2>
    <?php
        $dir = "./comments";
        if(is_dir($dir)) {
            $commentFiles = scandir($dir);
            foreach ($commentFiles as $fileName) {
                if ($fileName !== "." && $filename !== "..") {
                    echo "From <strong>$fileName</strong><br>";
                    $comment = file($dir . "/" . $fileName);
                    echo "From: " . htmlentities($comment[0]) . "<br>\n";
                    echo "Email Address: " . htmlentities($comment[1]) . "<br>\n";
                    echo "Date: " . htmlentities($comment[2]) . "<br>\n";
                    $commentLines = count($comment);
                    for ($i = 3; $i < $commentLines; $i++) {
                        echo htmlentities($comment[$i]) . "<br>\n";
                    }
                }
            }
        }
    ?>
</body>
</html>