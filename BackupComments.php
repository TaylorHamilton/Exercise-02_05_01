<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  
        Author: Taylor Hamilton
        Date: 11/16/2020
    -->
    <title>Backup Comments</title>
</head>
<body>
    <h2>Backup Comments</h2>
    <?php
    $source = "./comments";
    $destination = "./backups";
    if (!is_dir($destination)) {
        echo "The backup directory \"$destination\" does not exist.\n";
    } else {
        if (is_dir($source)) {
            echo "The source directory \"$source\" does exist.\n";
            $totalFiles = 0;
            $filesMoved = 0;
            $dirEntries = scandir($source);
            foreach ($dirEntries as $entry) {
                if ($entry !== "." && $entry !== ".."){
                    ++$totalFiles;
                    if(copy("$source/$entry", "$destination/$entry")) {
                        ++$filesMoved;
                    } else {
                        echo "Could not move file \"" . htmlentities($entry) . "\".<br>\n";
                    }
                }
            }
            echo "<p>$filesMoved of $totalFiles files successfully backed up.</p>\n";
        } else{
            echo "The source directory \"$source\" does not exist.\n";
        }
    }
    ?>
</body>
</html>