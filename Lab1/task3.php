<?php
$serverName = $_SERVER['SERVER_NAME'];
$serverAddress = $_SERVER['SERVER_ADDR'];
$serverPort = $_SERVER['SERVER_PORT'];
$scriptFilename = $_SERVER['SCRIPT_FILENAME'];
$scriptName = $_SERVER['SCRIPT_NAME']; 
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server and Script Information</title>
</head>
<body>
    <h2>Server Information:</h2>
    <ul>
        <li><strong>Server Name:</strong> <?php echo $serverName; ?></li>
        <li><strong>Server Address:</strong> <?php echo $serverAddress; ?></li>
        <li><strong>Server Port:</strong> <?php echo $serverPort; ?></li>
    </ul>

    <h2>Script Information:</h2>
    <ul>
        <li><strong>Filename:</strong> <?php echo $scriptFilename; ?></li>
        <li><strong>Script Name:</strong> <?php echo $scriptName; ?></li>
    </ul>
</body>
</html> 
