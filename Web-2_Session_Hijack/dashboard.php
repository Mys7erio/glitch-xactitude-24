<?php

session_start();

$flag = '';
if (isset($_COOKIE['isAdmin'])){
    
    $isAdmin = json_decode(base64_decode($_COOKIE['isAdmin']), true);
    //var_dump($isAdmin);

    if ($isAdmin['admin']) {
        
        $flag = "gctf{REAL_flag_here}";

    } else {
        
        $flag = 'no flag for you.';
    }

} else {
    
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="logout.php">logout</a>
    
    <div>
        <h1><?php echo $flag; ?></h1>
    </div>


</body>
</html>
