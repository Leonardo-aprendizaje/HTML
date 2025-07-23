<?php
<<<<<<< HEAD

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
}
=======
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Dados Recebidos:</h2>";

    echo "<strong>Nome:</strong> " . htmlspecialchars($_POST['nome']) . "<br>";
    echo "<strong>Data de Nascimento:</strong> " . htmlspecialchars($_POST['data_nascimento']) . "<br>";
    echo "<strong>CPF:</strong> " . htmlspecialchars($_POST['cpf']) . "<br>";
    echo "<strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "<br>";
    echo "<strong>Gênero:</strong> " . htmlspecialchars($_POST['genero']) . "<br><br>";

    echo "<strong>Tipo de Endereço:</strong> " . htmlspecialchars($_POST['tipo_endereco']) . "<br>";
    echo "<strong>Logradouro:</strong> " . htmlspecialchars($_POST['logradouro_endereco']) . "<br>";
    echo "<strong>Número:</strong> " . htmlspecialchars($_POST['numero_endereco']) . "<br>";
    echo "<strong>Complemento:</strong> " . htmlspecialchars($_POST['complemento_endereco']) . "<br><br>";

    echo "<strong>Mensagem:</strong> " . nl2br(htmlspecialchars($_POST['msg'])) . "<br>";
} else {
    echo "Nenhum dado foi enviado.";
}
?>
>>>>>>> 30968a8f3c249c267028facc0c751e3c8bc674d9
