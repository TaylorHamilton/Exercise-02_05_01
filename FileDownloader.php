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
    <title>File Downloader</title>
</head>
<body>
    <?php
    $dir = "../Exercise 02_05_01";
    if(isset($_GET['fileName'])){
        $fileToGet =$dir . "/" . stripslashes($_GET['fileName']);
        if(is_readable($fileToGet)){
            header("Content-Description: File Transfer");
            header("Content-Type: application/force-download");
            header("Content-Disposition: attachment; filename=\"" . $_GET['fileName'] . "\"");
            header("Content-Transfer-Encoding: base64");
            header("Content-Length: " . filesize($fileToGet));
            readfile($fileToGet);
            $showErrorPage = false;
            $errorMsg = "";
        } else {
            $errorMsg = "cannot read \"$fileToGet\"";
            $showErrorPage = true;
        }
    } else {
        $errorMsg = "No Filename Specified";
        $showErrorPage = true;
    }
    if($showErrorPage) {
    ?>
            <?php
    }
        ?>
    <h2>File Downloader</h2>
    <p>There was an error downloading "<?php 
    echo htmlentities($_GET['filename']); ?>"</p>
    <p><?php echo htmlentities($errorMsg);?></p>

</body>
</html>