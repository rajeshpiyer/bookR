<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/style.css?version=51">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styleBooking.css?version=51">
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
                <a href="adminHome.html">
                    Home
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="assignWorkManager.html">
                    Assign Work
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="#" id="active">
                    Services
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="index.html">
                    Log out
                </a>
            </div>
        </nav>



    </header>

    <main>


        <div class="box">

            <div class="head">
                <h3>Services</h3>
            </div>
            <div class="main">
                <ol class="services">
                <?php
                        function admindelete($val){
                            $conn=mysqli_connect("localhost", "root", "", "raj");

                            if(!$conn){
                                die("Error: Failed to connect to database!");
                            }
    
                            $query = mysqli_query($conn, "UPDATE TABLE `services` SET `approved` = 0 WHERE `Name` = '$val'");
                            $row = mysqli_num_rows($query);
                            header("Location: adminHome.php?");
                        }
                        
                                         
                        $conn=mysqli_connect("localhost", "root", "", "raj");

                        if(!$conn){
                            die("Error: Failed to connect to database!");
                        }

                        $query = mysqli_query($conn, "SELECT `name`,`Cost Criteria` FROM `services` WHERE `approved`=1");
                        $row = mysqli_num_rows($query);
                        echo "<form method=post>";
                        while($row=mysqli_fetch_array($query)){
                            $val = $row['name'];
                            $val1 = $row['Cost Criteria'];
                            echo" <li>" .$val.': '.$val1 ."</li><input type=submit name=$val class=button value=Delete />";
                        }
                        $servicename = $_POST['name'];
                        if(array_key_exists('delete', $_POST)) {
                            admindelete($POST['value']);
                        }
                        echo "</form>";
                ?>
                   
                </ol>

                <input type="button" value="Add" onclick="addService();">

                <form class="details">
                    <div class="hidden" id="hide">
                        <div class="element">

                            <label for="service">Service Name </label>
                            <input type="text" name="service" class="service" placeholder="Service Name" required>
                        </div>

                        <div class="element">
                            <label for="cost">Cost Criteria </label>
                            <input type="text" name="cost" class="cost" placeholder="Cost criteria" required>
                        </div>

                        <input type="submit" name="submit" value="Submit">

                    </div>

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