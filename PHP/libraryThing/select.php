<?php
if ( !isset($_POST["submit"]) || !isset($_POST["username"]) || !isset($_POST["password"]) ){
    header("Location: index.php", true, 301);
    exit;
}
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "e"){
        $tooLazyToModifyTheOlderCode = true;
    }
    else {
        header("Location: index.php", true, 301);
    }
}
//reserved for later projects
//if ( isset($_POST["submit"]) && isset($_POST["lessonType"]) && isset($_POST["paket-or-mandiri"]) && isset($_POST["part"])){
    //$url = "show.php?lessonType=" . $_POST["lessonType"] . "&paket-or-mandiri=" . $_POST["paket-or-mandiri"] . "&part=" . $_POST["part"];
    //header("Location: $url");
//}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Select Your Book (ppkn only)</title>
        <link rel="stylesheet" type="text/css" href="select.css">
    </head>
    <body>
        <form action="show.php" method="get">
            <div id="partSubmit">
            <label for="lessonType">Select Your Lesson : </label>
                <select class="dropdown" id="lessonType" name="lessonType"> <!--name is the name of the data and value is the value that will be sended into the next page-->
                    <option value="ppkn">PPKN</option>
                    <option value="pjok">PJOK</option>
                </select>
                <br><br>
                <label for="paket-or-mandiri">Select Your Book Type : </label>
                <select class="dropdown" id="paket-or-mandiri" name="paket-or-mandiri"> <!--name is the name of the data and value is the value that will be sended into the next page-->
                    <option value="Buku Mandiri">Buku Mandiri</option>
                    <option value="Buku Paket">Buku Paket</option>
                </select>
                <br><br>
                <label for="part">Part : </label>
                <select class="dropdown" id="part" name="part"> <!--name is the name of the data and value is the value that will be sended into the next page-->
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <h2>Note : If Small book, it's from 4 to 6</h2>
                <h2>i could do the check in this php file but it's more complicated and i'm lazy</h2>
                <br><br><br>
                <button type="submit" name="submit">Search</button>
            </div>
        </form>
    </body>
</html>