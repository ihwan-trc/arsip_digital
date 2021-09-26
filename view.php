<?php
$file = 'file_arsip/' . $_GET['file'];
header('Content-type: application/pdf');
@readfile($file);
