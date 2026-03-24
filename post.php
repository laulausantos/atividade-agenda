<?php
header('Content-Type: application/json');

// Recebe dados do formulário
$titulo = $_POST['titulo'] ?? '';
$data = $_POST['data'] ?? '';
$local = $_POST['local'] ?? '';

// Simulação de ID automático
$id = 4;

$response = [
   "status" => "sucesso",
   "metodo" => "POST",
   "tema" => "Agenda de Eventos da ETEC",
   "mensagem" => "Evento cadastrado com sucesso.",
   "evento" => [
      "id" => $id,
      "titulo" => $titulo,
      "data" => $data,
      "local" => $local
   ]
];

echo json_encode($response, JSON_PRETTY_PRINT);
?>