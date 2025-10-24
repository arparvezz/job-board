<?php
    require("functions.php");
    $allJobs = Jobs::allJobs();

    $jobCategory = 'all-category';
    if(isset($_GET['job-category'])){
        $jobCategory = $_GET['job-category'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Jobs</title>
    <link rel="stylesheet" href="./dist/style.css">
    <link rel="stylesheet" href="./dist/all-jobs.css">
</head>
<body>

    <?php
        require("./components/header.php");
    ?>


    <!-- hero section start -->
    <section class="all-jobs-section">
        <div class="container">
            <div class="all-jobs-wrap">
                <h5>View All available jobs..</h5>
                <p>Apply your desired job from  here.</p>
            </div>
        </div>
    </section>
    <!-- hero section end -->


    <!-- Jobs section start -->
    <section class="jobs-section">
        <div class="container">
            <h3><?php echo $jobCategory; ?></h3>
            <div class="jobs-section-wrap">
                <div class="jobs-filter">
                    <div class="jobs-filter-item">
                        <h3>Filter By Category</h3>
                        <form method="GET" action="all-jobs.php">
                            <select name="job-category" id="category" class="job-category-filter-select"  data-val="<?php echo $jobCategory; ?>">
                                <option value="all-category">All Category</option>
                                <option value="web-design">Web Design</option>
                                <option value="graphic-design">Graphic Design</option>
                                <option value="digital-marketing">Digital Marketing</option>
                            </select>
                            <button type="submit" class="filter-hidden-btn">Submit</button>
                        </form>
                        
                    </div>
                </div>
                <div class="job-grid-wrap">
                    <div class="jobs-grid">
                        <?php
                            foreach($allJobs as $job):
                        ?>
                            <!-- job card goes here -->
                            <?php
                                if($job['category'] == $jobCategory || $jobCategory == 'all-category'){
                                    require("./components/job-card.php");
                                }
                            ?>
                        <?php
                            endforeach;
                        ?>
                    </div>
                    <!-- <div class="jobs-grid-btn">
                        <a class="btn btn-secondary" href="#">Show All Jobs</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Jobs section end -->

    <?php
        require("./components/footer.php");
    ?>
<script src="./dist/script.js"></script>
</body>
</html>