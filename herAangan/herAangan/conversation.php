<?php


 require_once "database.php";
   
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $user_name = "Ajit"; // Replace this with the logged-in user's name or session data
    
        // Insert the message into the database
        $sql = "INSERT INTO chatting (user_name, message) VALUES ('$user_name', '$message')";
        $send =mysqli_query($conn, $sql);
        echo "<li class='chat outgoing'><p>". $message. "</p></li>";
        header("Location:chat.php"); 
        
    
   




?>