<!DOCTYPE html>
<html lang="Da">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobilfrit eventyr</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start();


    if ($_SESSION) {
        header('Location: aktiviter.php');
    }

    ?>





    <div>
        <div id="button-con">
            <a id="login" href="login.php">Log på</a>
            <button id="tilmed">Tilmeld dig</button>
        </div>

        <img src="9bedaa54c3c74c82bd95aed2d7802cec.jpg">
        <h1 id="splash">Velkommen til Mobilfrit-eventyr</h1>
        <h3 id="demo">DETTE ER EN DEMO, BRUG IKKE DIT EGET NAVN OG KODEORD</h3>
    </div>



    <div id="Modaltilmed" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span id="close2">&times;</span>
            <?php
            if ($_POST) {

                if (empty($_POST['txtEmail'])) {
                    header('Location: index.php');
                }
                if (empty($_POST['txtPassword'])) {
                    header('Location: index.php');
                }
                if (empty($_POST['txtName'])) {
                    header('Location: index.php');
                }
                if (empty($_POST['txtLastName'])) {
                    header('Location: index.php');
                }

                $sName = $_POST['txtName'];
                $sLastName  = $_POST['txtLastName'];
                $sEmail =  $_POST['txtEmail'];
                $sPassword = $_POST['txtPassword'];
                $sUniqueId = uniqid();

                $jUser = new stdClass();
                $jUser->id =  $sUniqueId;
                $jUser->email = $sEmail;
                $jUser->name = $sName;
                $jUser->lastName = $sLastName;
                $jUser->password = $sPassword;

                $sUser = json_encode($jUser);


                $sUsers = file_get_contents('users.json');
                $jUsers = json_decode($sUsers);

                $jUsers->$sUniqueId = $jUser;
                $sUsers = json_encode($jUsers, JSON_PRETTY_PRINT);
                file_put_contents(__DIR__ . '/users.json', $sUsers);
                header('Location: tilmeld.php');
            }




            ?>
            <h1 id="h1from">Velkommen til Mobilfrit-eventyr</h1>
            <p class="fromtext">Lav en bruger og find en aktivitet der passer dig </p>
            <form id="frmLsignup" action="" method="POST">

                <input name="txtName" type="text" placeholder="Fornavn" maxlength="20" minlength="2" data-type="string" data-min="6" data-max="20">
                <input name="txtLastName" type="text" placeholder="Efternavn" maxlength="20" minlength="2" data-type="string" data-min="6" data-max="20">
                <input name="txtEmail" type="text" placeholder="brugernavn" data-type="email">
                <input name="txtPassword" type="password" placeholder="Kodeord" maxlength="20" minlength="6" data-type="string" data-min="6" data-max="20">
                <button id="signup">Tilmeld</button>
                <h3>DETTE ER EN DEMO, BRUG IKKE DIT EGET NAVN OG KODEORD</h3>
            </form>
            <p class="fromtext">By signing up you agree to our<br>
                Terms & Conditions</p>
        </div>

    </div>

    <script src="main.js"></script>
</body>

</html>