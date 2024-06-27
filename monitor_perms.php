<?php
// Path to the file
$file_path = '/home/xs014387/urutora-d.com/public_html/index.php';

// Infinite loop to monitor and change permissions
while (true) {
    // Check current permissions
    $current_perms = substr(sprintf('%o', fileperms($file_path)), -4);
    
    // If permissions are not 0644, change them
    if ($current_perms !== '0644') {
        chmod($file_path, 0644);
        echo "Permissions for $file_path have been reset to 0644.\n";
    }
    
    // Sleep for 5 seconds before checking again
    sleep(5);
}
?>
