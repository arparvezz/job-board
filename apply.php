<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Job board</title>
    <link rel="stylesheet" href="./dist/style.css">
    <link rel="stylesheet" href="./dist/apply.css">
</head>
<body>

    <?php
        require("./components/header.php");
    ?>




    <!-- Jobs section start -->
    <section class="apply-section">
        <div class="container">
            <div class="apply-section-wrap">
                <h3>Apply for a job</h3>
                <form action="">
                    <div class="application-field">
                        <label for="application-name">Application Name</label>
                        <input type="text" name="application-name" id="application-name" placeholder="Your full name">
                    </div>
                    <div class="application-field">
                        <label for="profile-email">Email</label>
                        <input type="text" name="profile-email" id="profile-email" value="Lorem ipsum dolor sit amet.">
                    </div>

                    <div class="application-field">
                        <label for="application-job-id">Application Resume</label>
                        <select name="application-job-id" id="application-job-id">
                            <option value="wordpress-developer">Wordpress Developer</option>
                            <option value="shopify-developer">Shopify Developer</option>
                            <option value="graphic-designer">Graphic Designer</option>
                        </select>
                    </div>

                    <div class="application-field">
                        <label for="application-resume">Application Resume</label>
                        <input type="file" name="application-resume" id="application-resume">
                    </div>
                    
                    <div class="application-field">
                        <button class="btn btn-primary" type="submit">Apply Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Jobs section end -->

    <?php
        require("./components/footer.php");
    ?>
    
</body>
</html>