<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayBox | Sign In</title>
    <link rel="stylesheet" href="/PlayBox/pages/style/sign-in.css">
</head>
<body>
    <div class="container">
        <div class="box-form">
            <form name="form-signin" action="signin" method="post" onsubmit="return validatesignin()">
                <img src="/PlayBox/pages/Asset/logo.png" alt="" class="logo">
                <h1 class="title">PlayBox</h1>
                <h1 class="heading">Sign in to your account</h1>
                <p class="desc">Enter your email and password</p>
                <label for="email">Email address</label>
                <input class="input" id="email" name="email" type="email" placeholder="Enter your email address" required autofocus>
                <label for="password">Password</label>
                <input class="input" id="password" name="password" type="password" placeholder="Enter your password" required>
                <button type="submit" class="btn-submit" id="submit" name="submit">Submit</button>
                <p class="question">Don't have an account?
                    <a href="signup" style="color: #998F38;">Sign Up</a>
                </p>
                <img src="/PlayBox/pages/Asset/pic.png" alt="" class="pic">
                <?php
                if(!empty($error)) {
                    foreach($error as $errMsg){
                        echo '<div class="error-msg">'.$errMsg.'</div>';
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>