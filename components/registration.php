<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style Registratrion -->
    <link rel="stylesheet" href="registration.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./asserts/image/favicon-32x32.png" type="image/x-icon">

</head>

<body>

    <!-- Thematic break -->
    <hr>

    <div class="form">

        <!-- Form-->
        <form action="components/table.php" method="POST" name="Formulario" autocomplete="on">

            <!-- Fieldset (grouping elements)-->
            <fieldset>

                <!-- Legend (element optional)-->
                <legend>Cadastre-se</legend>

                <h1>Formulário</h1>

                <!-- Label one, Full Name (specifying the label) -->
                <label for="ffullName">Nome Completo: <br />
                    <!-- Input one, Full Name  (creating interactive controls) -->
                    <input type="text" name="fullName" id="ffullName" placeholder="Digite Seu Nome" autofocus minlength="3" maxlength="48" required>
                </label>
                <!-- End Label one -->

                <!-- Label two, Email (specifying the label) -->
                <label for="fe-mail">E-mail: <br />
                    <!-- Input two, Email  (creating interactive controls) -->
                    <input type="email" name="Email" id="femail" placeholder="Digite Seu E-mail" required pattern="(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)" title="Endereço de E-mail">
                </label>
                <!-- End Label two -->

                <!-- Label trhee, Telephone (specifying the label) -->
                <label for="ftelephone">Telefone: <br />
                    <!-- Input trhee, Telephone  (creating interactive controls) -->
                    <input type="tel" name="Telephone" id="ftelephone" placeholder="Digite Seu Número" style="resize: none; margin-top: 10px; outline-color: aqua; padding: 10px;" required>
                </label>
                <!-- End Label trhee -->

                <!-- Label four, Company Name (specifying the label) -->
                <label for="fcompany">Nome da Empresa: <br />
                    <!-- Input four, Company Name  (creating interactive controls) -->
                    <input type="text" name="Company" id="fcompany" placeholder="Digite Seu Número" required>
                </label>
                <!-- End Label four -->

                <!-- Label five, Topic (specifying the label) -->
                <label for="ftopic">Tema: <br />
                    <!-- Input five, Topic  (creating interactive controls) -->
                    <input type="text" name="Topic" id="ftopic" placeholder="Digite Seu Tema" required>
                </label>
                <!-- End Label five -->

                <!-- Label six, Message (specifying the label) -->
                <label for="fmessage">Mensagem: <br />
                    <!-- Text Area one, Message (enter long text in free format) -->
                    <textarea name="Message" id="fmessage" cols="66" rows="5" placeholder="Digite Sua Menssagem" required style="resize: none; margin-top: 10px; outline-color: aqua; padding: 10px; "></textarea>
                </label>
                <!-- End Label six -->

                <!-- Label seven, Suggestions (specifying the label) -->
                <label for="fsuggestions">Sugestão(s): <br />
                    <!-- Text Area two, Suggestions (enter long text in free format) -->
                    <textarea name="Suggestions" id="fsuggestions" cols="66" rows="5" placeholder="Digite Sua(s) Sugestão(s)" style="resize: none; margin-top: 10px; outline-color: aqua; padding: 10px; "></textarea>
                </label>
                <!-- End Label seven -->

                <!-- Registration Result  (csending the form to registrationResult.php) -->
                <input type="submit" name="Formulario" value="Enviar">

            </fieldset>
            <!-- End Fieldset -->

        </form>
        <!-- End Form -->

    </div>

    <!-- Thematic break -->
    <hr>

</body>

</html>