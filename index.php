<?php
try {
    $conn = mysqli_connect("localhost", "root", "", "sprawdziany");
} catch (Exception $ex) {
    echo "nie dziala :(";
    return;
}

echo "dziala";
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div id="UserData">
            <form method="post">
                <div class="input">
                    <label>Imię:</label>
                    <input type="text" name="add_first_name">
                </div>
                <div class="input">
                    <label>Nazwisko:</label>
                    <input type="text" name="add_last_name">
                </div>
                <div class="input">
                    <label>Klasa:</label>
                    <input type="text" name="add_class">
                </div>
                <div class="input">
                    <label>Numer z dziennika:</label>
                    <input type="text" name="add_number">
                </div>
                <input type="submit" name="przycisk" value="Wyslij"/>
        </div>
    </body>
</html>