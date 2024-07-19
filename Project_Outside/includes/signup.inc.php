<?php
    try {
        require_once "db.inc.php";

        $curr_date = date("Y-m-d");

        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $userName = $_POST['username'];
        $password = $_POST['password'];
        $role = 'users';

        $queryUsers = 'INSERT INTO users (username,password,first_name, last_name, role, date_added) VALUES(:username, :password, :first_name, :last_name, :role, :date_added)';
        $stmt = $pdo->prepare($queryUsers);

        $stmt->bindParam(":username", $userName);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":first_name", $firstName);
        $stmt->bindParam(":last_name", $lastName);
        $stmt->bindParam(":role", $role);
        $stmt->bindParam(":date_added", $curr_date);
        $stmt->execute();

        $rowCount = $stmt->rowCount();
        if($rowCount > 0) {
            http_response_code(200);
            echo "User Registered Successfully";
            
            $stmt = null;
            $pdo = null;

        }else {
            http_response_code(400);
            echo "Invalid Registraion Please Try Again!";
        }
        exit();
        

    }catch(PDOException $e) {
        if($e->getCode() === '23000') {
            http_response_code(400);
            echo "Duplicate Entry of Username please try again!";
        }else {
            http_response_code(500);
            die("Query Failed: ".$e->getMessage());
        }
    }
