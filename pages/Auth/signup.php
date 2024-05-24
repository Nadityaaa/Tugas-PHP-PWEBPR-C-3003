<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayBox | Sign Up</title>
    <link rel="stylesheet" href="/PlayBox/pages/style/sign-up.css">
</head>
<body>
    <div class="container">
        <div class="box-form">
            <form name="form-registrasi" action="signup" method="post" onsubmit="return validateRegis()">
                <img src="/PlayBox/pages/Asset/logo.png" alt="" class="logo">
                <h1 class="title">PlayBox</h1>
                <h1 class="heading">Create to your account</h1>
                <p class="desc">Make your own account</p>
                <label for="nama">Name</label>
                <input class="input" id="nama" name="nama" type="text" placeholder="Enter your full name" required autofocus>
                <label for="email">Email address</label>
                <input class="input" id="email" name="email" type="email" placeholder="Enter your email address" required>
                <label for="password">Password</label>
                <input class="input" id="password" name="password" type="password" placeholder="Enter your password" required>
                <input class="input" id="cpassword" name="cpassword" type="password" placeholder="Confirm your password" required>
                <form method="POST" action="/PlayBox/pages/Auth/signup.php">
                    <button type="submit" class="btn-submit" id="submit" name="submit">Create an account</button>
                </form>
                <p class="question">Already have an account?
                    <a href="signin" style="color: #998F38;">Sign In</a>
                </p>
                <img style="gap: 0px;" src="/PlayBox/pages/Asset/pic.png" alt="" class="pic">
                <?php
                if(!empty($error)){
                    foreach($error as $errMsg){
                        echo '<span class="error-msg">'.$errMsg.'</span>';
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>