<?php
$file = '/home/mihsedun/public_html/index.php';
$backup = '/home/mihsedun/public_html/backup/index.php';

// Check whether the file has been deleted
if (!file_exists($file)) {
    // file remove, getback from backup
    copy($backup, $file);
    echo "File index.php was deleted, but was restored from backup.";
} else {
    echo "File index.php save.";
}
