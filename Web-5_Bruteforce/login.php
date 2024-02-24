<?php
$databaseFile = 'users.db';

$db = new SQLite3($databaseFile);

if (!$db) {
    echo '<pre>';
    echo 'Database connection failed.';
    echo '</pre>';
    die("Database connection failed.");
}

if (isset($_GET['username']) && isset($_GET['password'])) {

    $username = $_GET['username'];
    $password = $_GET['password'];

    $getid = "SELECT username, password FROM users WHERE username = :username AND password = :password";
    $stmt = $db->prepare($getid);
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $stmt->bindValue(':password', $password, SQLITE3_TEXT);

    $result = $stmt->execute();

    if ($result === FALSE) {
        die('<pre>' . $db->lastErrorMsg() . '</pre>');
    }

    $numRows = 0;
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $numRows++;
        $user = $row["username"];
        $pass = $row["password"];

        http_response_code(200);
        echo '<pre>';
        echo '<br>Username: ' . $user . '<br>Password: ' . $pass;
        echo '</pre>';
    }

    if ($numRows > 0) {
        echo '<pre>';
        echo 'Flag: glitch{' . $pass . '}';
        echo '</pre>';
    } else {
        http_response_code(401);
        echo '<pre>';
        echo 'Login failed. Incorrect username or password.';
        echo '</pre>';
    }
}

$db = null;
?>
