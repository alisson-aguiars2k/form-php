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
    <link rel="stylesheet" href="./registrationResult.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../asserts/image/favicon.ico" type="image/x-icon">

    <!-- Title -->
    <title>Formulário de Cadastro</title>
</head>

<body>
   
    <!-- Thematic break -->
    <hr>

    <div class="form">

        <!-- Form-->
        <form action="" method="POST" name="Formulario" autocomplete="on">

            <!-- Fieldset (grouping elements)-->
            <fieldset>

                <!-- Legend (element optional)-->
                <legend>Cadastro Realizado</legend>

                <h1>Formulário</h1>

                <!-- Label one, Full Name (specifying the label) -->
                <label for="fname">
                    <h2>Nome Completo Cadastrado:</h2>
                    <p>
                        <?php echo $fullName; ?>
                    </p>
                </label>
                <!-- End Label one -->

                <!-- Label two, Email (specifying the label) -->
                <label for="fe-mail">
                    <h2>E-mail Cadastrado:</h2>
                    <p>
                        <?php echo strtolower($email); ?>
                    </p>
                </label>
                <!-- End Label two -->

                <!-- Label trhee, Telephone (specifying the label) -->
                <label for="ftelefhone">
                    <h2>Telefone Cadastrado:</h2>
                    <p>
                        <?php echo $telefhone; ?>
                    </p>
                </label>
                <!-- End Label trhee -->

                <!-- Label four, Company Name (specifying the label) -->
                <label for="fcompany">
                    <h2>Empresa Cadastrada:</h2>
                    <p>
                        <?php echo $company; ?>
                    </p>
                </label>
                <!-- End Label four -->

                <!-- Label five, Topic (specifying the label) -->
                <label for="ftopic">
                    <h2>Tema Abordado:</h2>
                    <p>
                        <?php echo $topic; ?>
                    </p>
                </label>
                <!-- End Label five -->

                <!-- Label six, Message (specifying the label) -->
                <label for="fmessage">
                    <h2>Mensagem Enviada:</h2>
                    <textarea name="Message" id="fmessage" cols="66" rows="5" required style="resize: none; margin-top: 10px; outline-color: aqua; padding: 10px;text-align: justify;">
                        <?php echo $message; ?>
                    </textarea>
                </label>
                <!-- End Label six -->

                <!-- Label seven, Suggestions (specifying the label) -->
                <label for="fsuggestions">
                    <h2>Sugestão(s) Enviada(s))</h2>
                    <textarea name="Message" id="fmessage" cols="66" rows="5" required style="resize: none; margin-top: 10px; outline-color: aqua; padding: 10px;text-align: justify;">
                        <?php echo $suggestions; ?>
                    </textarea>
                </label>
                <!-- End Label seven -->

                <!-- Button Back (Back index.php "Registration") -->
                <div class="buttonBack">
                    <a href="../index.php">
                        Voltar
                    </a>
                </div>

            </fieldset>
            <!-- End Fieldset -->

        </form>
        <!-- End Form -->

    </div>

    <!-- Thematic break -->
    <hr>

</body>

</html>