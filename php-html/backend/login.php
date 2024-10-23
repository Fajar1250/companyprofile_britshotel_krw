<?php

    if(isset($_POST['email']) || isset ($_POST['password'])) {
        $email = $_POST ['email'];
        $Password = $_POST ['Password'];

        if($email == 'admin@admin.com' && $Password == 'admin'){
            header('Location: ./dashboard.php');

        } else {
            echo "email atau password salah";
        }


    }


?>