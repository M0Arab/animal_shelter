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
if($vaccinated == "Ja")
{
    $vaccine_date = $_REQUEST['datum_enting'];
}
else
{
    $vaccine_date = "";
}

if (count($_FILES) > 0) {
    $imgData = file_get_contents($_FILES['image']['tmp_name']);
    $imageProperties = getimageSize($_FILES['image']['tmp_name']);
    
    //Performing insert query execution
    //here our table name is college
    $sql = "INSERT INTO dierenkaart (klant_id,soort_dier,ras,kleur,geboorte_datum,binnen_gekomen,geslacht,gecastreed,overige,medisch,geent,geent_datum,animal_image)
    VALUES ('$client_id','$soort','$race','$color','$birth_date','$entry_date','
    $gender','$castarated','$others','$medical_info','$vaccinated','$vaccine_date','$imgeData')";    
    
    if(mysqli_query($conn, $sql)){
        echo "Bedankt!! we zullen zo snel mogelijk contact met u opnemen";
    }
    else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
}


 
//Close connection
mysqli_close($conn);
// header("Location:klant.html");
?>