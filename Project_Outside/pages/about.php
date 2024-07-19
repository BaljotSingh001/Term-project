<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../styles/about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>About</title>
</head>
<body>
    <?php
        include "../components/header.php";
    ?>

    <div class="container p-5 about-page justify-content-center">
        <div class="row">
            <div class="col-12">
                <h1>About Our Movie Booking Website</h1>
            </div>
            <div class="col-6">
                <p>Welcome to our movie booking website, where the magic of cinema meets s
                    eamless convenience. We are dedicated to transforming your movie-watching experience into something extraordinary.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Our Mission</h2>
            </div>
            <div class="col-6">
                <p>our mission is simple yet profound: to connect movie enthusiasts with their favorite films effortlessly. We strive to provide a platform that not only simplifies the process of booking tickets but also enhances the overall 
                    experience with a user-friendly interface, comprehensive movie listings, and secure transactions.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <h2>What we Offer</h2>
            </div>
            <div class="col-10">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="w-50">
                        <strong>Easy Booking:</strong>
                        <p>With just a few clicks, you can browse through a 
                            wide selection of movies, check showtimes, and secure your tickets in advance. 
                            Our intuitive booking system ensures a hassle-free experience from start to finish.</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="float-end w-50">
                        <strong>Comprehensive Movie Information:</strong>
                        <p> Explore detailed movie descriptions, trailers, cast information, and 
                            reviews all in one place. Make informed decisions about your movie choices before booking.</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="w-50">
                        <strong>Secure Payment Options:</strong>
                        <p> We prioritize your security. Enjoy peace of mind with our secure 
                            payment gateway, ensuring that your transactions are safe and protected.</p>
                    </div>
                </li>
            
                <li class="list-group-item">
                    <div class="float-end w-50">
                        <strong>Personalized Recommendations:</strong>
                        <p> Discover new movies based on your preferences. Our recommendation engine 
                            suggests films you might enjoy, making your movie-going experience even more delightful.</p>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </div>
    
    <script src="../js/button-handler.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>