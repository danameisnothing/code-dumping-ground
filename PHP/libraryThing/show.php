<?php
if ( !isset($_GET["paket-or-mandiri"]) || !isset($_GET["part"]) || !isset($_GET["lessonType"])) {
    print("ERROR : No Data Sent / Incomplete Data");
    print("<br>Please go back");
    exit;
}
?>
<?php
// i have no better methods in my head
if ( isset($_GET["submit"]) ):
    if ( $_GET["lessonType"] == "ppkn" && $_GET["paket-or-mandiri"] == "Buku Mandiri" && $_GET["part"] == 4):
    ?>
    <!--goes into html mode for mandiri_4-->
    <!DOCTYPE html>
    <head>
        <title>Buku Mandiri Part 4</title>
        <link rel="stylesheet" type="text/css" href="show_css_stuff/mandiri_4.css">
    </head>
    <body>
        <div id="redirects">
            <a href="#43">Hal 43</a>
            <a href="#44">Hal 44</a>
            <a href="#45">Hal 45</a>
            <a href="#46">Hal 46</a>
            <a href="#47">Hal 47</a>
            <a href="#48">Hal 48</a>
        </div>
        <div id="bookDisplay">
            <img id="43" src="mandiri_4-pictures/1.jpg" alt="1st Pictures" width="1024" height="1024">
            <img id="44" src="mandiri_4-pictures/2.jpg" alt="2nd Pictures" width="1024" height="1024">
            <img id="45" src="mandiri_4-pictures/3.jpg" alt="3rd Pictures" width="1024" height="1024">
            <img id="46" src="mandiri_4-pictures/4.jpg" alt="4th Pictures" width="1024" height="1024">
            <img id="47" src="mandiri_4-pictures/5.jpg" alt="5th Pictures" width="1024" height="1024">
            <img id="48" src="mandiri_4-pictures/6.jpg" alt="6th Pictures" width="1024" height="1024">
        </div>
        <p>Not providing the images cause i'm pretty sure that's not allowed</p>
    </body>
    <!--end of html mode for mandiri_4-->
    <?php
    elseif ( $_GET["paket-or-mandiri"] == "Buku Mandiri" && $_GET["part"] == 5):
    ?>
    <!--goes into html mode for mandiri_5-->
    <!DOCTYPE html>
    <head>
        <title>Buku Mandiri Part 5</title>
    </head>
    <body>
        <h1>WIP</h1>
    </body>
    <?php else: // have to use this for some reason?>
    <p>Data Not Added Yet!</p>
    <p>Please go back</p>
    <?php endif; // ends the get part data if statement
endif; // ends the get submit if statement ?>