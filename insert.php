<?php

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "dier", "hond69", "dieren");
    
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$gender =  $_REQUEST['aanhef'];
$first_name =  $_REQUEST['firstname'];
$between =  $_REQUEST['tussen'];
$last_name = $_REQUEST['lastname'];
$full_addres = $_REQUEST['straatnaam'] . " " . $_REQUEST['huisnummer'] . " " . $_REQUEST['postcode'] . " " . $_REQUEST['plaatsnaam'];
$mobile_number = $_REQUEST['telefoonnummers'];
$email = $_REQUEST['email'];
$id = $_REQUEST['legitimatie'];
$id_number = $_REQUEST['legitimatie_nummer'];
    
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO klantenkaart  VALUES ('$gender','$first_name','$between', 
    '$last_name','$full_addres','$mobile_number','$email','$id','$id_number')";
    
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully." 
        . " Please browse your localhost php my admin" 
        . " to view the updated data</h3>"; 
    $client_id = $conn -> insert_id;

    
    echo nl2br("\n $gender\n $first_name\n \n $between\n $last_name "
        . "\n $full_addres\n  $mobile_number\n $email \n $id");
    
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}
mysqli_close($conn);
header("Location:dieren_kaart.php?clientid=" .$client_id)  
// Close connection

?>