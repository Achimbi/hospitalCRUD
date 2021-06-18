<?php include "db.php"; ?>

<?php session_start(); ?>


<?php

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM staff WHERE username = '{$username}'";

        $select_staff_query = mysqli_query($connection, $query);

        if(!$select_staff_query){
            die("Query Failed!". mysqli_error($connection));
        }

        while($row = mysqli_fetch_array($select_staff_query)){
            $db_staff_id = $row['staff_id'];
            $db_username = $row['username'];
            $db_firstname = $row['first_name'];
            $db_lastname  = $row['last_name'];
            $db_staff_role = $row['staff_role'];
            $db_sex = $row['sex'];
            $db_password = $row['password'];
            $db_email_address  = $row['email_address'];
            $db_address = $row['address'];
            $db_phone_number = $row['phone_number'];
            $db_image = $row['img'];
        }

        if($username !== $db_username && $password !== $db_password){
            header("Location: ../index.php ");

        } else if($username == $db_username && $password == $db_password){
            $_SESSION['username'] = $db_username;
            $_SESSION['firstname'] = $db_firstname;
            $_SESSION['lastname'] = $db_lastname;
            $_SESSION['staff_role'] = $db_staff_role;
            $_SESSION['image'] = $db_image;
            header("Location: ../admin");
        } else {
            header("Location: ../index.php");
        }
} 

