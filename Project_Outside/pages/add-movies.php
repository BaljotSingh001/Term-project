<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/signup_style.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Add Movies</title>
</head>
<body>
    <div class="form-content">
        <h1 class="white-color">Add Movies</h1>
        <div class="form-container">
            <form action="" method="POST" id="addMovie-form" autocomplete="off" enctype="multipart/form-data">
                <label for="first_name" class="white-color">Movie Name</label>
                <input type="text" name="movieName" id="movieName" class="display-block">
                <label for="last_name" class="white-color">Movie Details</label>
                <input type="text" name="movieDetails" id="movieDetails" class="display-block">
                <label for="user_name" class="white-color">Movie Status</label>
                <select name="movieStatus" id="movieStatus" class="display-block">
                    <option value="Now Showing">Now Showing</option>
                    <option value="Coming Soon">Coming Soon</option>
                </select>
                <label for="password" class="white-color">Movie Release Date</label>
                <input type="date" name="movieRelease" id="movieRelease" class="display-block">
                <label for="password" class="white-color">Movie Price</label>
                <input type="text" name="moviePrice" id="moviePrice" class="display-block">
                <label for="password" class="white-color">Movie Image</label>
                <input type="file" name="image" id="image">
                <div class="button-container">
                    <input type="submit" value="Upload" class="btn btn-primary">
                    <input type="button" value="Cancel" class="btn btn-secondary" id="cancel">
                </div>
            </form>
        </div>
    </div>
    <script src="../js/add-movie.js"></script>
</body>
</html>