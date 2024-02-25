<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $targetDir = "uploads/";
    $uniqueId = uniqid();
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);

    $fileExtension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

    $targetFile = $targetDir . $uniqueId . "." . $fileExtension;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "File uploaded to: /" . $targetFile;
    } else {
        echo "Error uploading file.";
    }
}
?>
