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
    <title>Visitor Comments</title>
</head>
<body>
    <?php
    $dir = "./comments";
    if(is_dir($dir)) {
        if(isset($_POST['save'])) {
            if(empty($_POST['name'])){
                echo "Unknown Visitor\n";
            } else {
                $saveString = stripslashes($_POST['name']) . "\n";
                $saveString .= stripslashes($_POST['email']) . "\n";
                $saveString .= date('r') . "\n";
                $saveString .= stripslashes($_POST['comment']) . "\n";
                echo "\$saveString: $saveString<br>";
                $currentTime = microtime();
                echo "\$currentTime: $currentTime <br>";
                $timeArray = explode(" ", $currentTime);
                echo var_dump($timeArray) . "<br>";
                $timeStamp = (float)$timeArray[1] +
                (float)$timeArray[0];
                echo "\$timeStamp: $timeStamp<br>";
                $saveFileName = "$dir/comment.$timeStamp.txt";
                echo "\$saveFileName: $saveFileName<br>";
                if(file_put_contents($saveFileName, $saveString) > 0){
                    echo "File \"" . htmlentities($saveFileName) . "\"
                    successfully saved. <br>\n";
                } else {
                    echo "There was an error writing \"" .
                    htmlentities($saveFileName) . "\".<br>\n";
                }
            }
        }
    }
    ?>
    <h2>Visitor Comments</h2>
    <form action="VisitorComments.php" method="post">
        Your name: <input type="text" name="name"><br>
        Your email: <input type="email" name="email"><br>
        <textarea name="comment" rows="6" 
            cols="100"></textarea><br>
        <input type="submit" name="save" value="Submit your 
            comment"><br>
    </form>
</body>
</html>