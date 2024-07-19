<link rel="stylesheet" href="../styles/styles.css">

<?php
    include_once '../includes/db.inc.php';

    $movieList = 'SELECT * FROM movies WHERE movie_status = "Now Showing" ORDER BY movie_release_date DESC';
    $stmt = $pdo->prepare($movieList);
    $stmt->execute();

    echo "<h1 class='headline'>Now Showing</h1>";
    while($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<h1>'.$res['movie_name'].'</h1>';
        echo '<p class="details">'.$res['movie_details'].'</p>';
        echo '<img src="data:image/png;base64,'. base64_encode($res['movie_image']).'" width="150px" />';
        echo '<strong class="price"> $'.$res['movie_price'].'</strong>';
        echo '<button class="btn btn-primary movie-id" data-movie-id="'.$res['id'].'">Book Now</button>';
        echo '<button class="btn btn-primary delete-btn" data-movie-id="'.$res['id'].'">Delete</button>';
    }

    $movieList2 = 'SELECT * FROM movies WHERE movie_status = "Coming Soon" ORDER BY movie_release_date DESC';
    $stmt = $pdo->prepare($movieList2);
    $stmt->execute();

    echo "<h1 class='headline'>Coming Soon</h1>";
    while($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $date = $res['movie_release_date'];
        $date = date('F d, Y ', strtotime($date));

        echo '<h1>'.$res['movie_name'].'</h1>';
        echo '<p class="details">'.$res['movie_details'].'</p>';
        echo '<img src="data:image/png;base64,'. base64_encode($res['movie_image']).'" width="150px" />';
        echo '<strong class="date_release"> Date Release: '.$date.'</strong>';
        echo '<button class="btn btn-primary movie-id" data-movie-id="'.$res['id'].'">Early Book</button>';
        echo '<button class="btn btn-primary delete-btn" data-movie-id="'.$res['id'].'">Delete</button>';
    }

?>

<script src="../js/movie.js"></script>
<script src="../js/button-handler.js"></script>


