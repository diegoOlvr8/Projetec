<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$host = 'localhost';
$user = 'root';
$pass = ''; 
$dbname = 'minhas_tarefas';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    echo json_encode(["status" => "erro", "mensagem" => "Falha na conexão: " . $conn->connect_error]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo json_encode(["status" => "erro", "mensagem" => "Dados inválidos."]);
    exit;
}

$room = $conn->real_escape_string($data['room']);
$nome = $conn->real_escape_string($data['nome']);
$dataCriacao = $conn->real_escape_string($data['data']);
$isRecorrente = isset($data['isRecorrente']) && $data['isRecorrente'] ? 1 : 0;

$sql = "INSERT INTO tarefas (room, nome, data_criacao, recorrente) VALUES ('$room', '$nome', '$dataCriacao', '$isRecorrente')";

if ($conn->query($sql)) {
    $tarefa_id = $conn->insert_id;

    
    if ($isRecorrente && isset($data['recorrencia'])) {
        $hora = $conn->real_escape_string($data['recorrencia']['hora']);
        $minuto = $conn->real_escape_string($data['recorrencia']['minuto']);
        $dias = implode(',', $data['recorrencia']['dias']);
        $sqlRec = "INSERT INTO recorrencias (tarefa_id, hora, minuto, dias) 
                   VALUES ($tarefa_id, '$hora', '$minuto', '$dias')";
        $conn->query($sqlRec);
    }

    echo json_encode(["status" => "sucesso", "mensagem" => "Tarefa salva com sucesso!"]);
} else {
    echo json_encode(["status" => "erro", "mensagem" => "Erro ao salvar tarefa: " . $conn->error]);
}

$conn->close();
?>

