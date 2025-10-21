<?php
session_start();
$_SESSION['user'] = $_SESSION['user'] ?? "guest";

?>
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
                <form action="functions.php" method="POST">
                    <input type="hidden" name="operation" value="user-registration">
                    <div class="form-heading-wrap">
                        <h3 class="form-heading">Register Now</h3>
                    </div>
                    <div class="form-item">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="your name here...">
                    </div>
                    <div class="form-item">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="your email here...">
                    </div>
                    <div class="form-item">
                        <label for="role">Register as</label>
                        <select name="role" id="role">
                            <option value="applicant">Applicant</option>
                            <option value="manager">Manager</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"  placeholder="Your password here...">
                    </div>
                    <div class="form-item">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="confirm-password" id="confirm-password"  placeholder="Your Confirm password here...">
                    </div>
                    <div class="form-btns">
                        <button class="btn btn-secondary registration-btn" type="submit">Register Now</button>
                        <a href="login.php" class="btn btn-primary login-btn" type="submit">Have an account - Login</a>
                    </div>
                </form>
                <?php
                    if(isset($_GET['msg'])){
                        $msg = $_GET['msg'];
                        echo "<span class='alert alert-danger'>{$msg}</span>";
                    }
                ?>
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