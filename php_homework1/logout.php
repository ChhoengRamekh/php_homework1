<?php 
    session_start();/*  It destroys the session information. */
    $_SESSION = [];// Reset the session array:
    session_destroy();// Destroy the session data on the server:
    define('TITLE', 'Logout');// Define a page title and include the header:
    include('templates/header.html');
?>

<?php include('templates/footer.html'); ?>