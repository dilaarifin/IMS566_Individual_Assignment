    <?php
    // Start the session to access session variables
    session_start();

    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect the user to the login page or homepage
    header("Location: index.php"); // Or "index.php"
    exit(); // Always include exit() after a header redirect to prevent further script execution
    ?>