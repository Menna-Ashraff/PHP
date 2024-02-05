<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $agree = isset($_POST["agree"]) ? $_POST["agree"] : "No"; 

    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "users";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users_details (username, email, gender, agree) VALUES ('$username', '$email', '$gender', '$agree')";

    if ($conn->query($sql) === TRUE) 
    {
        echo "User registered successfully";
        header("Location: table.php");  
        exit();
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>