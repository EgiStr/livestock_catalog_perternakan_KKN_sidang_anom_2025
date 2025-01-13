<?php

$targetFolder = "/home/sindanga/laravel/storage/app/public";
$linkFolder = "/home/sindanga/public_html/storage";
symlink($targetFolder, $linkFolder);
echo 'Symlink process successfully completed';
