<!-- Creating the Variables -->
<?php
$fullName = $_POST['fullName'];
$email = $_POST['Email'];
$telefhone = $_POST['Telephone'];
$company = $_POST['Company'];
$topic = $_POST["Topic"];
$message = $_POST["Message"];
$suggestions = $_POST['Suggestions'];
$From = 'dominio@venx.com.br';
?>
<!-- End Creating the Variables -->

<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link rel="stylesheet" href="./table.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../asserts/image/favicon.ico" type="image/x-icon">

    <!-- Title -->
    <title>Formulário de Cadastro</title>
</head>

<body>
    <hr>
    <!-- Table Result Personal -->
    <table>
        <!-- Table head -->
        <thead>
            <tr>
                <th>Nome Completo</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Empresa</th>
            </tr>
        </thead>
        <!-- End head -->
        <!-- Table Body -->
        <tbody>
            <tr>
                <td><?php echo $fullName; ?></td>
                <td><?php echo strtolower($email); ?></td>
                <td><?php echo $telefhone; ?></td>
                <td><?php echo $company; ?></td>
            </tr>
        </tbody>
        <!-- End Body -->
    </table>

    <!-- Table Result Message -->
    <table>
        <!-- Table head -->
        <thead>
            <tr>
                <th>Tema</th>
                <th>Messagem</th>
                <th>Susgestão(s)</th>
            </tr>
        </thead>
        <!-- End head -->
        <!-- Table Body -->
        <tbody>
            <tr>
                <td><?php echo $topic; ?></td>
                <td><?php echo $message; ?></td>
                <td><?php echo $suggestions; ?></td>
            </tr>
        </tbody>
        <!-- End Body -->
    </table>
    <!-- End Table -->

    <!-- Button Back (Back index.php "Registration") -->
    <div class="buttonBack">
        <a href="../index.php">
            Voltar
        </a>
    </div>
    <hr>
</body>

</html>