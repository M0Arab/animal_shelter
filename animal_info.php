<?php
session_start();
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
$query = "SELECT * FROM dierenkaart WHERE klant_id=" . $_GET["id"].';';
$res = $conn->query($query);
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="index.css">
</head>
<body>

<nav class="navClass">
        <header><img class="logo" src="img/logo.png"></header>
        <ul>
            <li><a href="out.php" class="login">Log uit</a> </li>
            <li><a href="index.html" class="active">Home</a></li>
        </ul>
    </nav>
    <br>

<?php
if($_SESSION["name"]) {

    if ($res->num_rows > 0) {
        echo
        '
        <table id= "key2">
            <tr>
                <th> Soort </th>
                <th> Ras </th>
                <th> Kleur </th>
                <th> Geboortedatum </th>
                <th> Binnenkomstdatum </th>
                <th> Geslacht </th>
                <th> Gecastreerd </th>
                <th> Overige informatie </th>
                <th> Medische informatie </th>
                <th> Geent </th>
                <th> Geent datum </th>
                <th> Foto </th>
            </tr>
        ';
        // output data of each row
        while($row = $res->fetch_assoc()) {
            echo '<tr> <td>' . $row["soort_dier"] . '</td>' 
            . '<td>' . $row["ras"] . '</td>'
            . '<td>' . $row["kleur"] . '</td>'
           . '<td>' . $row["geboorte_datum"] . '</td>'
           . '<td>' . $row["binnen_gekomen"] . '</td>'
           . '<td>' . $row["geslacht"] . '</td>'
           . '<td>' . $row["gecastreed"] . '</td>'
           . '<td>' . $row["overige"] . '</td>'
           . '<td>' . $row["medisch"] . '</td>'
           . '<td>' . $row["geent"] . '</td>'
           . '<td>' . $row["geent_datum"] . '</td>'
            . '<td>' . $row["animal_image"] . '</td></tr>';
        }
    } else {
        echo "0 results";
    }
}
else echo "<h1>Please login first .</h1>";
?>
</body>
</html>