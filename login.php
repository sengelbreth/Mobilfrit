<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <div id="Modallogin" class="modallogin">

        <!-- Modal content -->
        <div class="modal-content">

            <?php
            if ($_POST) {
                if (empty($_POST['email'])) {
                    header('Location: index.php');
                }
                if (empty($_POST['password'])) {
                    header('Location: index.php');
                }

                $sjUsers = file_get_contents(__DIR__ . '/users.json');
                $jUsers = json_decode($sjUsers);

                foreach ($jUsers as $jUser) {
                    if (
                        $jUser->email == $_POST['txtEmail'] &&
                        $jUser->password == $_POST['txtPassword']
                    ) {
                        $_SESSION['jUser'] = $jUser;
                        header('Location: aktiviter.php');
                    }
                }
            }
            ?>
            <form id="frmLogin" method="POST">
                <input name="txtEmail" data-type="email" type="text" placeholder="brugernavn">
                <input name="txtPassword" type="password" type="text" maxlength="20" minlength="6" data-type="string" data-min="6" data-max="20" placeholder="Kodeord">
                <button id="btnLogin">Log på</button>
                <h3>DETTE ER EN DEMO, BRUG IKKE DIT EGET NAVN OG KODEORD</h3>
            </form>
        </div>

    </div>

</body>

</html>