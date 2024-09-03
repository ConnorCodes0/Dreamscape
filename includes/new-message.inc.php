<?php 
session_start();

function newMessage($name, $email, $message) {
    require_once 'dbh.inc.php';

    try {
        $sql = 'INSERT INTO messages (message_name, message_email, message_message) VALUES (:message_name, :email, :message_message)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':message_name' => $name, ':email' => $email, 'message_message' => $message]);

        $_SESSION['message-sent'] = 'sent';
        header('location: ../contact.php');

    } catch (PDOExeption $e) {
        echo 'Failed to send message! ' . $e->getMessage();
    }

    
}

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    newMessage($name, $email, $message);
}