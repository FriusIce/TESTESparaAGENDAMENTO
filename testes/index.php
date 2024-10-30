
<?php
include 'db.php';

$especialidade = $_GET['especialidade'] ?? null;
$avaliacao = $_GET['avaliacao'] ?? null;
$precoMax = $_GET['precoMax'] ?? null;

$filtros = [];
$sql = "SELECT * FROM professores WHERE 1=1";

if ($especialidade) {
    $sql .= " AND especialidade LIKE ?";
    $filtros[] = "%$especialidade%";
}
if ($avaliacao) {
    $sql .= " AND avaliacao >= ?";
    $filtros[] = $avaliacao;
}
if ($precoMax) {
    $sql .= " AND preco <= ?";
    $filtros[] = $precoMax;
}

$stmt = $pdo->prepare($sql);
$stmt->execute($filtros);
$professores = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($professores);
exit();
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Escolha de Professores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Escolha o Professor Ideal</h1>
    <div id="filters">
        <label>Áreas:</label>
        <input type="text" id="especialidade" placeholder="Social, Hospitalar, etc.">
        <label>Avaliação Mínima:</label>
        <input type="number" id="avaliacao" min="1" max="5">
        <label>Preço Máximo:</label>
        <input type="number" id="precoMax">
        <button onclick="filtrarProfessores()">Filtrar</button>
    </div>
    <div id="professores-lista"></div>
    <script src="scripts/script.js"></script>
</body>
</html>
