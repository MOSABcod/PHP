<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- create a form and send email and password , in the action page you will determine if the data is sent by get or
post 
1. make asearch engine website that contain URL as input text and button named (GO) if you click on Go
will redirect you to the written URL -->

    <h2>login form</h2>
    <form action="in" method="POST">
        <label for="Email">Email</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        
        <label for="Passsword">Password</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <button type="submit">submit</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $email = $_POST["email"];
            $password = $_POST["password"];
            echo "data received via post <br>";
            echo "Email:$email <br>";
            echo "Password:$password <br>";

        }
        elseif ($_SERVER["REQUEST_METHOD"] === "GET"){
            $email = $_GET["email"] ?? "N/A";
            $password = $_GET["password"] ?? "N/A";
            echo "data received via get <br>";
            echo "Email:$email <br>";
            echo "Password:$password <br>";
        }
        else {
            echo "No data received";
        }
    ?>

    
</body>
</html>