<?php
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   $titulo = $_POST['titulo'] ?? '';
   $data = $_POST['data'] ?? '';
   $local = $_POST['local'] ?? '';

   $resposta = [
      "status" => "sucesso",
      "metodo" => "POST",
      "tema" => "Agenda de Eventos da ETEC",
      "mensagem" => "Evento cadastrado com sucesso.", ''
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