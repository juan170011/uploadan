<?php
// Path to the file
$file_path = '/home/xs014387/urutora-d.com/public_html/index.php';

// Check if the file exists
if (file_exists($file_path)) {
    // Change the file permissions to 0644
    chmod($file_path, 0644);
    echo "Permissions for $file_path have been set to 0644.";
} else {
    echo "File does not exist.";
}
?>
