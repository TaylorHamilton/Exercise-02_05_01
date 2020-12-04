<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  
        Author: Taylor Hamilton
        Date: 11/16/2020
    -->
    <title>View Files 2</title>
</head>
<body>
    <h2>View Files 2</h2>
    <?php
        $dir = "../Exercise 02_05_01";
        $dirEntries = scandir($dir);
        foreach ($dirEntries as $entries) {
            if (strcmp($entries, '.') !== 0 && strcmp($entries, '..') !== 0) {
            echo "<a href=\"$dir/$entries\">$entries</a><br>\n";
            }
        }
        closedir($dirEntries);
    ?>
</body>
</html>