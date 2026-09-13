<?php

switch ($rota) {
    case 'GET /consulta/acomodacao':
        require __DIR__ . '/../Web/consulta/acomodacao/acomodacao.php';
        exit;

    case 'GET /consulta/cliente':
        require __DIR__ . '/../Web/consulta/cliente/cliente.php';
        exit;

    case 'GET /consulta/colaborador':
        require __DIR__ . '/../Web/consulta/colaborador/colaborador.php';
        exit;

    case 'GET /consulta/estacionamento':
        require __DIR__ . '/../Web/consulta/estacionamento/estacionamento.php';
        exit;

    case 'GET /consulta/financeiro':
        require __DIR__ . '/../Web/consulta/financeiro/financeiro.php';
        exit;

    case 'GET /consulta/frigobar':
        require __DIR__ . '/../Web/consulta/frigobar/frigobar.php';
        exit;
}
