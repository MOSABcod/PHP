<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Search Engine</h2>
    <form action="" method="GET">
        <label for="url">Enter URL</label>
        <input type="text" id="url" name="url" placeholder="https://example.com" required>
        <button type="submit">GO</button>
    </form>
    <?php
    if(isset($_GET["url"])){
        $url = $_GET["url"];
        if (filter_var($url , FILTER_VALIDATE_URL)){
            header("location: $url");
            exit();
        }else {
            echo "Invalid URL. Please enter a valid URL";
        } 
    }
    echo "<br>";
    ?>
</body>
</html>