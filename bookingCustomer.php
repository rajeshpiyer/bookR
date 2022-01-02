<?php

    session_start();

    if ( isset($_GET['err']) && strlen($_GET['err']) >= 1  ) {
        $value = $_GET['err'];
        echo "<script type = 'text/javascript'>alert('$value');</script>";
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styleBooking.css">
</head>

<body>

    <header>
        <div class="heading">
            <h1>bookR</h1>

            <a href="#" class="button">
                <div id="one"></div>
                <div id="two"></div>
                <div id="three"></div>
            </a>
        </div>

        <nav class="head">
            <div class="link">
                <div class="link1"></div>
                <a href="customerHome.html">
                    Home
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="#" id="active">
                    Booking
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="#">
                    Update Profile
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="index.php">
                    Log out
                </a>
            </div>
        </nav>



    </header>

    <main>


        <div class="box">

            <div class="head">
                <h3>Booking</h3>
            </div>
            <div class="main">
                <div class="date">
                    <form class="details" method="post" action="bookingCustomerCon.php">

                        <div class="element">
                            <label for="date">Date </label>
                            <input type="date" name="date" class="text-box" id="date" required>
                        </div>

                        <input type="submit" value="Verify" id="verify">

                    </form>
                </div>
            </div>

        </div>

    </main>


    <footer>

        <p>&copy; 2022 bookR</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>