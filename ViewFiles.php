<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--  
        Author: Taylor Hamilton
        Date: 11/16/2020
    -->
    <title>View Files</title>
</head>
<body>
    <h2>View Files</h2>
    <?php
        $dir = "../Exercise 02_05_01";
        $openDir = opendir($dir);
        while ($curFile = readdir($openDir)) {
            if (strcmp($curFile, '.') !== 0 && strcmp($curFile, '..') !== 0) {
            echo "<a href=\"$dir/$curFile\">$curFile</a><br>\n";
            }
        }
        closedir($openDir);
    ?>
</body>
</html>