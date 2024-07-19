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
    <title>Sign Up Page</title>
</head>
<body>
    <div class="form-content">
        <h1 class="white-color">Sign Up Form</h1>
        <div class="form-container">
            <form action="" method="POST" id="signup-form" autocomplete="off">
                <label for="first_name" class="white-color">First Name</label>
                <input type="text" name="firstname" id="firstname" class="display-block">
                <label for="last_name" class="white-color">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="display-block">
                <label for="user_name" class="white-color">Username</label>
                <input type="text" name="username" id="username" class="display-block">
                <label for="password" class="white-color">Password</label>
                <input type="password" name="password" id="password" class="display-block">
                <label for="password" class="white-color">Confirm Password</label>
                <input type="password" name="re-password" id="re-password" class="display-block">
                <div class="button-container">
                    <input type="submit" value="Sign Up" class="btn btn-primary">
                    <input type="button" value="Cancel" class="btn" id="cancel">
                </div>
            </form>
        </div>
    </div>
    <div class="text-container">
        
        <div class="text-content">
            <h1 class="tag-line"><em>"Creating laughter, tears, and everything between."</em></h1>
            <h3>Register to book your seat</h3>
        </div>
    </div>
    
    <script src="../js/signup.js"></script>
</body>
</html>