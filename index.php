<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <div class="container">
        <div class="box-form">
            <form action="" method="post">
                <img src="Asset/logo.png" alt="" class="logo">
                <h1 class="title">PlayBox</h1>
                <h1 class="heading">Sign in to your account</h1>
                <p class="desc">Enter your email and password</p>
                <label for="email">Email address</label>
                <input class="input" id="email" type="email" placeholder="Enter your email address" required autofocus>
                <label for="password">Password</label>
                <input class="input" id="password" type="password" placeholder="Enter your password" required>
                <button class="btn-submit">Create an account</button>
                <p class="question">Don't have an account?
                    <a href="signup.php" style="color: #998F38;">Sign Up</a>
                </p>
                <img src="Asset/pic.png" alt="" class="pic">
            </form>
        </div>
    </div>
</body>
</html>