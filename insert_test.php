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
$client_id = $_REQUEST['clientId'];
$soort =  $_REQUEST['soort'];
$race =  $_REQUEST['race'];
$color =  $_REQUEST['kleur'];
$birth_date = $_REQUEST['geboortedatum'];
$entry_date = $_REQUEST['datum_binnengekomen'];
$gender = $_REQUEST['geslacht'];
$castarated = $_REQUEST['gecastreerd'];
$others = $_REQUEST["kenmerk"];
$medical_info = $_REQUEST['gegevens'];
$vaccinated = $_REQUEST['geent'];




//Performing insert query execution
//here our table name is college
$sql = "INSERT INTO dierenkaart  VALUES ('$client_id','$soort','$race','$color','$birth_date','$entry_date','
$gender','$castarated','$others','$medical_info','$vaccinated','$birth_date')";    
if(mysqli_query($conn, $sql)){
    echo "bedankt!! we zullen zo snel mogelijk contact met u opnemen";
}
else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}
    
//Close connection
mysqli_close($conn);
header("Location:klant.html");
?>