
<?php
    include_once 'db.inc.php';
  
    if(isset($_POST['action']) && $_POST['action'] === 'insert') {
        try {
            $movie_id = $_POST['movie_id'];
            $user_id = $_POST['user_id'];
            
            $movieList = 'SELECT movie_seat_available FROM movies WHERE id = :movie_id';
            $stmt = $pdo->prepare($movieList);
            $stmt->execute([':movie_id' => $movie_id]);
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $availableSeat = $res['movie_seat_available'];


            if($availableSeat > 0) {
                http_response_code(200);
                $bookMovie = 'INSERT INTO movie_users(movie_id, user_id) VALUES(:movie_id, :user_id)';
                $stmt = $pdo->prepare($bookMovie);
                $stmt->bindParam(':movie_id', $movie_id);
                $stmt->bindParam(':user_id', $user_id);
        
                $stmt->execute();

                $rowCount = $stmt->rowCount();
                $deductSeat = "UPDATE movies SET movie_seat_available = movie_seat_available - 1 WHERE id = :id";
                echo $deductSeat;
                $stmt = $pdo->prepare($deductSeat);
                $stmt->bindParam(':id', $movie_id);
                $stmt->execute();  
            }else {
                http_response_code(400);
                echo "Fully Book, Book Something Else";
            }
    
  
        }catch(PDOException $e) {
            http_response_code(400);
            echo "You already Booked this Movie. Book Something Else!";
        }
        
    }elseif(isset($_POST['action']) && $_POST['action'] === 'delete') {
        try {
            $movie_id = $_POST['movie_id'];
            
            
            $deleteMovieUsers = "DELETE FROM movie_users WHERE movie_id = :id";
            $stmt = $pdo->prepare($deleteMovieUsers);
            $stmt->bindParam(':id', $movie_id);
            $stmt->execute();
        
            $deleteMovie = "DELETE FROM movies WHERE id = :id";
            $stmt2 = $pdo->prepare($deleteMovie);
            $stmt2->bindParam(':id', $movie_id);
            $stmt2->execute();
        }catch(PDOException $e) {
            echo $e;
        }
    }


