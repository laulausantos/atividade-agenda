<?php

header("Content-Type: application/json");

$metodo = $_GET['metodo'] ?? '';

if ($metodo == 'get') {

    $resposta = [
        "status" => "sucesso",
        "metodo" => "GET",
        "tema" => "Agenda de Eventos da ETEC",
        "dados" => [
    "turma" => "3DS",
    "periodo" => "Diurno",
    "eventos" => [
[
    "id" => 1,
    "titulo" => "Feira Tecnológica",
    "data" => "2026-04-10",
    "local" => "Patio Principal"
],
    [
        "id" => 2,
        "titulo" => "Semana da Programação",
        "data" => "2026-05-18",
        "local" => "Laboratório 2"
    ],
        [
            "id" => 3,
            "titulo" => "Mostra de TCC",
            "data" => "2026-06-22",
            "local" => "Auditório"
        ]
            ]
        ]
    ];

    echo json_encode($resposta, JSON_PRETTY_PRINT);

} elseif ($metodo == 'post') {


    $titulo = $_POST['titulo'] ?? '';
    $data = $_POST['data'] ?? '';
    $local = $_POST['local'] ?? '';

    $resposta = [
        "status" => "sucesso",
        "metodo" => "POST",
        "tema" => "Agenda de Eventos da ETEC",
        "mensagem" => "Evento cadastrado com sucesso.",
        "evento" => [
            "id" => 4,
            "titulo" => $titulo,
            "data" => $data,
            "local" => $local
        ]
    ];

    echo json_encode($resposta, JSON_PRETTY_PRINT);

} else {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Método inválido"
    ]);
}