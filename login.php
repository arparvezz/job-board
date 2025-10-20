<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Job board</title>
    <link rel="stylesheet" href="./dist/style.css">
    <link rel="stylesheet" href="./dist/login.css">
</head>
<body>

    <?php
        require("./components/header.php");
    ?>

    <section class="login-form-section">
        <div class="container">
            <div class="login-form">
                <form action="">
                    <div class="form-heading-wrap">
                        <h3 class="form-heading">Login Now</h3>
                    </div>
                    <div class="form-item">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="your email here...">
                    </div>
                    <div class="form-item">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"  placeholder="Your password here...">
                    </div>
                    <div class="form-btns">
                        <button class="btn btn-primary login-btn" type="submit">Login</button>
                        <a href="registration.html" class="btn btn-secondary registration-btn" type="submit">Register Now</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="registration-form-section">
        <div class="container">
            <div class="registration-form">
            </div>
        </div>
    </section>

    <?php
        require("./components/footer.php");
    ?>

    

</body>
</html>