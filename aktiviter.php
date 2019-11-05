<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">

    <title>aktivitet</title>
</head>

<body>
    <div class="grid-container">
        <div class="grid-item">
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Jeg virker ikke" name="search">
                    <button type="submit">
                        <img src="d.png"></button>
                </form>
            </div>
        </div>
        <div class="grid-item"> <select placeholder="Tid">
                <option value="volvo">Tid</option>
                <option value="saab">14:00</option>
                <option value="mercedes">15:00</option>
                <option value="audi">16:00</option>
            </select> </div>
        <div class="grid-item"> <select placeholder="Dato">
                <option value="volvo">Dato</option>Volvo</option>
                <option value="saab">dd/MM/YY</option>
                <option value="mercedes">dd/MM/YY</option>
                <option value="audi">dd/MM/YY</option>
            </select> </div>
        <div class="grid-item"> <select placeholder="By">
                <option value="volvo">By</option>
                <option value="saab">Næstved</option>
                <option value="mercedes">Køge</option>
                <option value="audi">Københvan</option>
            </select> </div>
        <div class="grid-item"> <select placeholder="Alder">
                <option value="volvo">Alder</option>
                <option value="saab">10-12</option>
                <option value="mercedes">12-14</option>
                <option value="audi">14-17</option>
                <option value="audi">alle</option>
            </select> </div>

        <div class="grid-item"><img src="profile.png"> <a href="logud.php" id="logaf">Log ud</a></div>

    </div>
    <div class="grid-container1">
        <div class="grid-item1"><a href="">Tegne klub</a></div>
        <div class="grid-item1"><a href="">Bag en kage</a></div>
        <div class="grid-item1"><a href="">Lave aftensmad</a></div>
        <div class="grid-item1"><a href="">Gå tur</a></div>
        <div class="grid-item1"><a href="">Løb en tur</a></div>
        <div class="grid-item1"><a href="">Gå tur med hund</a></div>
        <div class="grid-item1"><a href="">Bordtennis kamp</a></div>
        <div class="grid-item1"><a href="">Shoppe tur</a></div>
        <div class="grid-item1"><a href=""></a>Klippe klister</div>
        <div class="grid-item1"><a href=""></a>Tur på rulleskøjter</div>
        <div class="grid-item1"><a href=""></a>Stangtennis kamp</div>
        <div class="grid-item1"><a href=""></a>Stoldans/stopdans</div>
        <div class="grid-item1"><a href=""></a>Fodbold</div>
        <div class="grid-item1"><a href=""></a>Bygge lego</div>
        <div class="grid-item1"><a href=""></a>Sleep over</div>
        <div class="grid-item1"><a href="">Lege aftale</a></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"><a href="" id="lav">Lav en aktivitet</a></div>

    </div>




    <div id="shape">

        <div id="shape1">
            <p>Har du brug for hjælp</p>
        </div>
        <p>?</p>
    </div>





    <div id="Modaltilmed" class="modal">


        <div class="modal-content">
            <span id="close2">&times;</span>

            <h1 class="h1from">Skriv dit spørgesmål/problem her, så ser vi om vi kan hjælpe</h1>
            <h3 class="h1from">DETTE ER EN DEMO DER BLIVER IKKE SENDT NOGET </h3>
            <form id="frmLsignup" action="" method="POST">

                <input name="txtName" type="text" placeholder="Skrev her...">

                <button id="send">Send<button>
            </form>


        </div>

    </div>


    <script src="amain.js"></script>

</body>

</html>