<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dieren Opvang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<nav class="navClass">
        <header><img class="logo" src="img/logo.png"></header>
        <ul>
            <li><a href="login.html" class="login">Log in</a> </li>
            <li><a href="index.html" class="active">Home</a></li>
        </ul>
    </nav>
    <br>
    <div class="container">
        <form name="animalForm" method="post" action="insert_animal.php" enctype="multipart/form-data">
            <input type="hidden" value= <?php echo $_GET["clientid"]?> name="clientId"/>
            <label for="soort"> Soort </label>
            <select id="soort" name="soort">
                <option value="Kat">Kat</option>
                <option value="Hond">Hond</option>
                <option value="Rat">Rat</option>
                <option value="Papegaai">Papegaai</option>
                <option value="Davy">Davy</option>
                <option value="Hamster">Hamster</option>
                <option value="Cavia">Cavia</option>
                <option value="Konijn">Konijn</option>
                <option value="Goudvis">Goudvis</option>
                <option value="Vogel">Vogel</option>
                <option value="Schilpad">Schilpad</option>
            </select>

            <label for="race">Ras</label>
            <input type="text" id="race" name="race" placeholder="Ras..." />

            <label for="kleur">Kleur</label>
            <input type="text" id="kleur" name="kleur" placeholder="Kleur...">

            <label for="geboortedatum">Geboortdatum</label>
            <input type="date" id="geboortedatum" name="geboortedatum" placeholder="Geboortdatum">

            <label for="datum_binnengekomen">Datum binnengekomen</label>
            <input type="date" id="datum_binnengekomen" name="datum_binnengekomen" placeholder="Geboortdatum">

            <label for="geslacht"> Geslacht </label>
            <select id="geslacht" name="geslacht">
                <option value="Man">Man</option>
                <option value="Vrouw">Vrouw</option>
            </select>

            <br>
            <label for="gecastreerd"> Gecastreerd </label>
            <select id="gecastreerd" name="gecastreerd">
                <option value="Ja">Ja</option>
                <option value="Nee">Nee</option>
            </select>

            <label for="kenmerk">Overige kenmerken</label>
            <input type="text" id="kenmerk" name="kenmerk" placeholder="Overige...">

            <label for="gegevens">Medische gegevens</label>
            <input type="text" id="gegevens" name="gegevens" placeholder="Medische gegevens...">

            <br>
            <label for="geent"> Geënt </label>
            <select id="geent" name="geent">
                <option value="Ja">Ja</option>
                <option value="Nee">Nee</option>
            </select>

            <label for="datum_enting"> Datum enting </label>
            <input type="date" id="datum_enting" name="datum_enting" placeholder="datum_enting">

            <label for="image">Select Image File:</label>
            <input type="file" name="image" required>
            <input type="submit" value="Submit">

        </form>
    </div>
    <script>
        
        function getExtension(filename) {
            var parts = filename.split('.');
            return parts[parts.length - 1];
            }

        function isImage(filename) {
            var ext = getExtension(filename);
            switch (ext.toLowerCase()) {
                case 'jpg':
                case 'gif':
                case 'bmp':
                case 'png':
                //etc
                return true;
            }
            return false;
            }
    </script>
</body>

</html>