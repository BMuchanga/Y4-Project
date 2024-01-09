<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish a connection to your MySQL database (MySQL Workbench)
    $localhost:3306 = "localhost:3306";
    $root = "root";     
    $Kiah_1256 = "Kiah_1256";   
    $continental = "continental";     
    $conn = new mysqli("$localhost:3306", "$root", "$Kiah_1256", $"continental");

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data From the form
    $from = $_POST["from"];
    $to = $_POST["to"];
    $DepartureDate = $_POST["DepartureDate"];
    $DepartureTime= $_POST["DepartureTIme"];
    $ChooseFlight= $_POST["ChooseFlight"];
    $class = $_POST["class"];
    $SeatNumber = $_POST["SeatNumber"];
    $Adult = $_POST["Adult"];
    $Children = $_POST["Children"];
    $SelectTrip = $_POST["SelectTrip"];
    $ReturnDate = $_POST["ReturnDate"];
    $FullName = $_POST["Full Name"];
    $IDNumber = $_POST["ID Number"];
    $PassportNumber= $_POST["Passport Number"];
    $PhoneNumber= $_POST["Phone Number"];
    $Email = $_POST["Email"];
    

    // Insert data into the database
    $sql = "INSERT INTO booking (from,to,DepartureDate,DepartureTime,ChooseFlight,class,SeatNmber,Adult,Children,SelectTrip,ReturnDate,FullName,IDNumber,PassportNumber,PhoneNumber,Email) VALUES ('$From','$to','$DepartureDate','$DepartureTime','$ChooseFlight','$class','$SeatNmber','$Adult','$Children','$SelectTrip','$ReturnDate','$FullName','$IDNumber','$PassportNumber','$PhoneNumber','$Email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>



