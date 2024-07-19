<?php
    try {
        require_once "db.inc.php";

        $movieName = $_POST['movieName'];
        $movieDetails = $_POST['movieDetails'];
        $movieStatus = $_POST['movieStatus'];
        $movieRelease = $_POST['movieRelease'];
        $moviePrice = $_POST['moviePrice'];
        $movieImage = $_FILES['image']["tmp_name"];
        $fp = fopen($movieImage, 'rb');
        $content = fread($fp, filesize($movieImage));
        fclose($fp);
        

        // echo $targetFile;
        $queryAddMovie = 'INSERT INTO movies (movie_name, movie_details, movie_status, movie_release_date, movie_price, movie_image)
        VALUES (:movieName, :movieDetails, :movieStatus, 
        :movieRelease, :moviePrice, :movieImage)';
        $stmt = $pdo->prepare($queryAddMovie);

        $stmt->bindParam(":movieName", $movieName);
        $stmt->bindParam(":movieDetails", $movieDetails);
        $stmt->bindParam(":movieStatus", $movieStatus);
        $stmt->bindParam(":movieRelease", $movieRelease);
        $stmt->bindParam(":moviePrice", $moviePrice);
        $stmt->bindParam(":movieImage", $content);

        $stmt->execute();

        echo $content;

        // echo json_encode($stmt);

    }catch(PDOException $e) {
        if($e->getCode() === '23000') {
            http_response_code(400);
            echo "Duplicate Entry of Movie please try again!";
        }else {
            http_response_code(500);
            die("Query Failed: ".$e->getMessage());
        }
    }
