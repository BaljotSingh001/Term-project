<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Dashboard Page</title>
</head>
<body>
    
    <div class="container">
        <h1 id="greetings"></h1>
        <span>Here's your dashboard you can delete and add movies and user can see them.</span>
        <?php
            include "../components/admin-header.php";
        ?>

        <?php
            include "../components/movie-list.php";
        ?>
    </div>


    <script src="../js/index.js"></script>
    <script src="../js/button-handler.js"></script>
</body>
</html>