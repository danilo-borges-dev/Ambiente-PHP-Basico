<?php
declare(strict_types=1);

// Título da página
echo "<h2>Verificando conexão com o banco de dados PostgreSQL</h2>";

try {
    $pdo = require __DIR__ . '/config/database.php';

    $stmt = $pdo->query('SELECT version()');
    $version = $stmt->fetchColumn();

    echo "<p style='color: green;'><strong>✅ Conexão bem-sucedida!</strong></p>";
    echo "<p>Versão do PostgreSQL: <code>$version</code></p>";
} catch (PDOException $e) {
    echo "<p style='color: red;'><strong>❌ Falha na conexão:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
}
