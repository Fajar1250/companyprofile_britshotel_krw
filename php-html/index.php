<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ini halaman home</title>
</head>
<body>
    <h1>Ini halaman login</h1>
    <form action="./backend/login.php" method = "POST" >
        <input type="email" name="email" id="email" placeholder="email"/>
        <input type="Password" name="Password" id="Password" placeholder="Password"/>
        <button type="submit">login</button>

    </form>

    <?php

        if(isset($_POST['email']) || isset ($_POST['password'])) {
            $email = $_POST ['email'];
            $Password = $_POST ['Password'];

            echo $email;


        }


    ?>

    
</body>
</html>