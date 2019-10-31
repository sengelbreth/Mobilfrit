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
        header('Location: profile.php');
    }
    if ($_POST) {
        if (empty($_POST['email'])) {
            header('Location: index.php');
        }
        if (empty($_POST['password'])) {
            header('Location: index.php');
        }

        $sjUsers = file_get_contents('users.json');
        $jUsers = json_decode($sjUsers);

        foreach ($jUsers as $jUser) {
            if (
                $jUser->email == $_POST['txtEmail'] &&
                $jUser->password == $_POST['txtPassword']
            ) {
                $_SESSION['jUser'] = $jUser;
                header('Location: profile.php');
            }
        }
    }



    if ($_POST) {

        if (empty($_POST['txtEmail'])) {
            header('Location: signup.php');
        }
        if (empty($_POST['txtPassword'])) {
            header('Location: signup.php');
        }
        if (empty($_POST['txtName'])) {
            header('Location: signup.php');
        }
        if (empty($_POST['txtLastName'])) {
            header('Location: signup.php');
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
        file_put_contents('users.json', $sUsers);
    }




    ?>


    <div>
        <div id="button-con">
            <button id="login">Log på</button>
            <button id="tilmed">Tilmeld dig</button>
        </div>

        <img src="9bedaa54c3c74c82bd95aed2d7802cec.jpg">
        <h1 id="splash">Velkommen til Mobilfrit-eventyr</h1>
    </div>

    <div id="Modallogin" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span id="close1">&times;</span>
            <form id="frmLogin" method="POST">
                <input name="txtEmail" data-type="email" type="text" value="a@b.com">
                <input name="txtPassword" type="password" type="text" maxlength="20" minlength="6" data-type="string" data-min="6" data-max="20" value="a1pass">
                <button id="btnLogin" onclick="return login(this);" data-start="LOGIN" data-wait="WAIT ...">LOGIN</button>
            </form>
        </div>

    </div>
    <div id="Modaltilmed" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span id="close2">&times;</span>
            <form id="frmLogin" action="" method="POST">
                <input name="txtName" type="text" placeholder="Name" maxlength="20" minlength="2" data-type="string" data-min="6" data-max="20">
                <input name="txtLastName" type="text" placeholder="Last name" maxlength="20" minlength="2" data-type="string" data-min="6" data-max="20">
                <input name="txtEmail" type="text" placeholder="email" data-type="email">
                <input name="txtPassword" type="password" placeholder="Last name" maxlength="20" minlength="6" data-type="string" data-min="6" data-max="20">
                <button id="btnLogin" onclick="return login(this);" data-start="LOGIN" data-wait="WAIT ...">signup</button>
            </form>
        </div>

    </div>

    <script src="main.js"></script>
</body>

</html>