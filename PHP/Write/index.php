<?php
// variables fucking up somehow
$message = "";
// vague attempts at error handling

// Credit lol : https://www.youtube.com/watch?v=Ejyi4pC5-3E&t=83s

if (is_dir("./data")) {
    if (file_exists("./data/data.php")) {
        $message = $message . "File Found";
        require("./data/data.php");
    }
    elseif (!file_exists("./data/data.php")) {
        $message = $message . "./data/data.php Not Found, Creating File...";
        $tempWrite = fopen("./data/data.php", "w");
        fwrite($tempWrite, '<?php
        $data = "";?>');
        fclose($tempWrite);
        require("./data/data.php");
    }
    // i guess this helps if some unknown error occured, it wouldn't overwrite the existing files?
    else {
        echo("Notice : Unhandled Exception Occured!");
        die();
    }
}
else {
    $message = $message . "Folder Not Found, Creating Folder";
    mkdir("./data");
    echo("Notice : Folder Not Found, Creating Folder..., Please, Refresh The Page. (I Couldn't Be Bothered To Make This Work)");
    die();
}

if (isset( $_POST["submit"] ) && $_POST["textname"] !== "") {
    $filteredPost = htmlspecialchars( $_POST["textname"] , ENT_QUOTES);
    if ($filteredPost == $_POST["textname"]) {
        $tempWrite = fopen("./data/data.php", "w");
        fwrite($tempWrite, '<?php
        $data = "' . $_POST["textname"] . '";?>');
        fclose($tempWrite);
        require("./data/data.php");
    }
    else {
        $message = $message . ", Possible XSS Detected, Not Putting Chars Into Server!";
    }
}

echo("Notice : " . $message);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>
</head>
<body>
    <p>Text Since Last POST : </p>
    <?php
    echo($data);
    ?>
    <br><br>
    <form action="" method="post">
        <label for="text">New Text : </label>
        <input id="text" name="textname">
        <button type="submit" name="submit">Submit To Server</button><br><br>
    </form>
</body>
</html>