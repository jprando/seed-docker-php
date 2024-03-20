...
<?php

$servername = "mysql";
$username = "root";
$password = "password";
$dbname = "mydatabase";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT 'Hello, World!' as message";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Saída dos dados de cada linha
    while($row = $result->fetch_assoc()) {
        echo $row["message"];
        echo 123;
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
...
<script>
    alert("acorda pedrinho...");
</script>