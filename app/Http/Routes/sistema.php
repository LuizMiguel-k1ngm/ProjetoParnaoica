<?php
switch ($rota) {
    case 'GET /':
        require __DIR__ . '/../Web/login/index.php';
        exit;
}
