<?php

switch ($rota) {
    case 'GET /cadastro/acesso':
        require __DIR__ . '/../Web/cadastrar/acesso/login_colaborador.php';
        exit;

    case 'GET /cadastro/acomodacao':
        require __DIR__ . '/../Web/cadastrar/acomodacao/acomodacao.php';
        exit;

    case 'GET /cadastro/cliente':
        require __DIR__ . '/../Web/cadastrar/cliente/cliente.php';
        exit;

    case 'GET /cadastro/colaborador':
        require __DIR__ . '/../Web/cadastrar/colaborador/colaborador.php';
        exit;

    case 'GET /cadastro/estacionamento':
        require __DIR__ . '/../Web/cadastrar/estacionamento/estacionamento.php';
        exit;

    case 'GET /cadastro/frigobar':
        require __DIR__ . '/../Web/cadastrar/frigobar/frigobar.php';
        exit;

    case 'GET /cadastro/kit':
        require __DIR__ . '/../Web/cadastrar/kit_frigobar/kit_frigobar.php';
        exit;

    case 'GET /cadastro/reserva':
        require __DIR__ . '/../Web/cadastrar/reserva/reserva.php';
        exit;
}
