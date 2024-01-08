<?php
$databaseFile = 'users.db';

// Create or open the SQLite database
$db = new SQLite3($databaseFile);

if (!$db) {
    echo '<pre>';
    echo 'Database connection failed.';
    echo '</pre>';
    die("Database connection failed.");
}

if (isset($_GET['username']) && isset($_GET['password'])) {

    // Retrieve data

    $username = $_GET['username'];
    $password = $_GET['password'];
    
    // Intentionally introducing a SQL injection vulnerability
    $getid = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password'";

    // Use prepared statement to prevent SQL injection
    $stmt = $db->prepare($getid);
    $result = $stmt->execute();

    if ($result === FALSE) {
        die('<pre>' . $db->lastErrorMsg() . '</pre>');
    }

    // Check if any rows were returned
    $numRows = 0;
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $numRows++;
        $user = $row["username"];
        $pass = $row["password"];

        echo '<pre>';
        echo '<br>Username: ' . $user . '<br>Password: ' . $pass;
        echo '</pre>';
    }

    if ($numRows > 0) {
        // Login successful
        echo '<pre>';
        echo 'Login successful.';
        echo '</pre>';
        
    } else {
        // Login failed
        echo '<pre>';
        echo 'Login failed. Incorrect username or password.';
        echo '</pre>';
    }
}

// Close connection (SQLite3 doesn't have a specific close method)
$db = null;
?>
