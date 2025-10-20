<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Job board</title>
    <link rel="stylesheet" href="./dist/style.css">
</head>
<body>
    
    <?php
        require("./components/header.php");
    ?>


    <!-- hero section start -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-banner">
                <h3>Job listing website using PHP-MYSQL</h3>
                <p>A minimal job listing website with the feature of uploading jobs by manager. A applicant can apply here to his
                    desired  job.
                </p>
                <a class="btn btn-primary" href="#jobs-section">View All Jobs</a>
            </div>
        </div>
    </section>
    <!-- hero section end -->


    <!-- Jobs section start -->
    <section class="jobs-section">
        <div class="container">
            <div class="jobs-section-wrap">
                <div class="jobs-filter">
                    <div class="jobs-filter-item">
                        <h3>Filter By Category</h3>
                        <select name="category" id="category">
                            <option value="web-design">Web Design</option>
                            <option value="graphic-design">Graphic Design</option>
                            <option value="digital-marketing">Digital Marketing</option>
                        </select>
                    </div>
                </div>
                <div class="job-grid-wrap">
                    <div class="jobs-grid">
                        <div class="job-card">
                            <div class="job-thumb">
                                <a href="#">
                                    <img src="./imgs/web-design.jpg" alt="">
                                </a>
                            </div>
                            <div class="job-content">
                                <h3 class="job-title">Junior Web Designer</h3>
                                <p class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quae quo quis quibusdam aliquam quasi porro ex labore, perspiciatis quas!</p>
                                <a class="btn" href="#">Show Details</a>
                            </div>
                        </div>
                        <div class="job-card">
                            <div class="job-thumb">
                                <a href="#">
                                    <img src="./imgs/web-design.jpg" alt="">
                                </a>
                            </div>
                            <div class="job-content">
                                <h3 class="job-title">Junior Web Designer</h3>
                                <p class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quae quo quis quibusdam aliquam quasi porro ex labore, perspiciatis quas!</p>
                                <a class="btn" href="#">Show Details</a>
                            </div>
                        </div>
                        <div class="job-card">
                            <div class="job-thumb">
                                <a href="#">
                                    <img src="./imgs/web-design.jpg" alt="">
                                </a>
                            </div>
                            <div class="job-content">
                                <h3 class="job-title">Junior Web Designer</h3>
                                <p class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quae quo quis quibusdam aliquam quasi porro ex labore, perspiciatis quas!</p>
                                <a class="btn" href="#">Show Details</a>
                            </div>
                        </div>
                        <div class="job-card">
                            <div class="job-thumb">
                                <a href="#">
                                    <img src="./imgs/web-design.jpg" alt="">
                                </a>
                            </div>
                            <div class="job-content">
                                <h3 class="job-title">Junior Web Designer</h3>
                                <p class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quae quo quis quibusdam aliquam quasi porro ex labore, perspiciatis quas!</p>
                                <a class="btn" href="#">Show Details</a>
                            </div>
                        </div>
                        <div class="job-card">
                            <div class="job-thumb">
                                <a href="#">
                                    <img src="./imgs/web-design.jpg" alt="">
                                </a>
                            </div>
                            <div class="job-content">
                                <h3 class="job-title">Junior Web Designer</h3>
                                <p class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quae quo quis quibusdam aliquam quasi porro ex labore, perspiciatis quas!</p>
                                <a class="btn" href="#">Show Details</a>
                            </div>
                        </div>
                        <div class="job-card">
                            <div class="job-thumb">
                                <a href="#">
                                    <img src="./imgs/web-design.jpg" alt="">
                                </a>
                            </div>
                            <div class="job-content">
                                <h3 class="job-title">Junior Web Designer</h3>
                                <p class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quae quo quis quibusdam aliquam quasi porro ex labore, perspiciatis quas!</p>
                                <a class="btn" href="#">Show Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="jobs-grid-btn">
                        <a class="btn btn-secondary" href="#">Show All Jobs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jobs section end -->

    <?php
        require("./components/footer.php");
    ?>
    
</body>
</html>