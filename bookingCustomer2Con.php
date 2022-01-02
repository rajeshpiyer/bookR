<?php

/*header("Location: game.php?name=".urlencode($_POST['who']));*/

// $txt1=filter_input(INPUT_POST, 'fname');
// $txt2=filter_input(INPUT_POST, 'lname');
// $txt3=filter_input(INPUT_POST, 'email');
// $txt4=filter_input(INPUT_POST, 'mob');
// $txt5=filter_input(INPUT_POST, 'address');
// $txt6=filter_input(INPUT_POST, 'type');
// $txt7=filter_input(INPUT_POST, 'pass');
// $event_type=filter_input(INPUT_POST, 'type');

    session_start();

    $booking_date = $date;
    $user_id = $_SESSION['users_id'];
    $event_type=filter_input(INPUT_POST, 'type');

// if (!empty($txt1)){
//     if (!empty($txt2)){
//         if (!empty($txt3)){ 
//             if (!empty($txt4)){
//                 if (!empty($txt5)){
// 					if (!empty($txt6)){
// 						if (!empty($txt7)){
// 							if (!empty($txt8)){
// 								if ($txt8 == $txt7){
    $host="localhost";  
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "raj";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


    if (mysqli_connect_error()) {
		die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
	}

	    // $checkUser = "SELECT * from users where email='$txt3'";
	    // $result=mysqli_query($conn, $checkUser);
	    // $count = mysqli_num_rows($result);
	    // if($count > 0){
		// 	echo"User exist";
	    // }


    else{
	    $sql="INSERT INTO `booking`(`date`,`users_id`,`event_type`)
	    values('$date','$user_id','$event_type')";
	    if ($conn->query($sql)) {
            // header("Location: customerHome.php?err=".urlencode("New record is inserted successfully"));	
	    }
	    else{
		    echo "Error: ".$sql."<br>".$conn->error;
	    }
	    $conn->close();
    }							
?>