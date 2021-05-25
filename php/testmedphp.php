<!DOCTYPE html>
<html>
    <head>
        <title>FormsTest</title>
    </head>

    <body>
    <?php

    $name = $_POST["nameInput"];
    $lastName = $_POST["lastNameInput"];
    $dateOfBirth = new DateTime($_POST["dateOfBirth"]);
    $favoriteFruit = $_POST["favoriteFruit"];
    $today = new DateTime(date("d-m-Y"));
    $timeAlive = $today->diff($dateOfBirth);

    if (empty($_POST["nameInput"]) || empty($_POST["lastNameInput"]) || empty($_POST["dateOfBirth"]) || empty($_POST["favoriteFruit"])) {
        echo "<p style='color:blue; font-size: 100px;'>" . "Fyll alla fält!" . "</p>";
    } 
    
    else {
        echo "<p style='color:blue; font-size: 100px;'>" . "Du är inloggad!" . "</p>";
        echo "<p style='font-size: 40px;'>" . "Ditt namn är " . $name . "!" . "</p>";
        echo "<p style='font-size: 40px;'>" . "Ditt efternamn är " . $lastName . "!" . "</p>";
        echo "<p style='font-size: 40px;'>" . "Du föddes " . $dateOfBirth->format('d/m/Y') . "." . "</p>";
        echo "<p style='font-size: 40px;'>" . "Alltså har du levt i " . $timeAlive->y . " år, " . $timeAlive->m . " månader och " . $timeAlive->d . " dagar!" ."</p>";
        echo "<p style='font-size: 40px;'>" . "Din favoritfrukt är " . $favoriteFruit . ", wow! Så coolt!" . "</p>";
    }
    ?>
    </body>
</html>
