<?php

function is_valid_file_type($file) {
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    return in_array($file_extension, $allowed_types);
}

function handle_file_upload($file, $upload_dir) {
    global $base_url;

    $target_dir = $_SERVER["DOCUMENT_ROOT"] . $upload_dir . '/';
    $target_file = $target_dir . basename($file["name"]);

    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        $file_url = $base_url . $upload_dir . '/' . basename($file["name"]);
        return $file_url;
    } else {
        return false;
    }
}

?>
