<?php

try {
    $db = new PDO('sqlite:db/auth.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>
