<?php

require_once 'autoload.php';

$file = new File(1);
$file->setName("myfile.txt");
$file->setExtension(".txt");
$file->setPath(Config::get('shared_storage'));

$local = new LocalStorage(1);
$local->handleMiddleware(); // check if all requirements are satisfied
$local->setUploader(new Uploader($file)); // set an uploader to handle files

Logger::json( $local->getUploader()->getFile()->getFileName());