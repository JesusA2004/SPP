<?php

    if (!isset($_GET['file'])) {
        http_response_code(400);
        exit('Bad Request');
    }

    $file = basename($_GET['file']);
    $path = __DIR__ . '/../Public/Docs/' . $file;

    if (!file_exists($path)) {
        http_response_code(404);
        exit('Archivo no encontrado');
    }

    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="' . $file . '"');
    header('Content-Length: ' . filesize($path));
    readfile($path);
    exit;
