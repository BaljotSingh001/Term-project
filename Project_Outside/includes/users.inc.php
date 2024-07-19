<?php
    require_once 'db.inc.php';
    function checkCredentials() {
        try {
            global $pdo;

            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $queryUsers = "SELECT * FROM users WHERE username = :username AND password = :password";
            $stmt = $pdo->prepare($queryUsers);
            $stmt->execute([
                ':username' => $username,
                ':password' => $password,
            ]);
    
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $rowCount = $stmt->rowCount();
    
            if($rowCount > 0) {
                http_response_code(200);
                $role = $res[0];
                $curr_user = $role['first_name'];
                $curr_user_id = $role['id'];
                echo json_encode(array('success' => true, 'message'=>$role['role'], 'first_name'=>$curr_user, 'id'=>$curr_user_id));
            } else {
                http_response_code(401);
                echo json_encode(array('success'=> false, 'message'=>'Invalid Credentials'));
            }
    
        }catch(PDOException $ex) {
            http_response_code(500);
            echo json_encode(array('success'=> false, 'message'=>'Database Error '.$ex->getMessage()));
        }
    }

    If($_SERVER['REQUEST_METHOD']=== 'POST'){
        checkCredentials();
    }