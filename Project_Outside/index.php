<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login_style.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>

    <div class="login-container">
        <h1 class="white-color light-text-wght">Login Form</h1>
        <div class="form-container">
            <form action="" method="POST" id="login-form">
                <label for="username" class="white-color" class="display-block">Username</label>
                <input type="text" name="username" id="username" class="display-block input-center-text" autocomplete="off">
                <label for="password" class="white-color" class="display-block">Password</label>
                <input type="password" name="password" id="password" class="display-block input-center-text">
                <input type="submit" value="Login" class="m-y btn btn-primary">
                <hr>
                <strong class="white-color m-y">Don't have an account? <a href="./pages/signup.php">Sign Up</a> here</strong>
            </form>
        </div>
    </div>

    <script src="./js/index.js"></script>
</body>
</html>