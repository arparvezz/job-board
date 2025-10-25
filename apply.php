<?php
if(!isset($_SESSION)){
    session_start();
}

require("functions.php");

$jobId = 1;

if(isset($_GET['job-id'])){
   $jobId = $_GET['job-id'];
}


$jobsDetails = Jobs::getJobDetails($jobId)[0];


// echo "<pre>";
// print_r($jobsDetails);
// echo "</pre>";



?>
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
            <?php
                if(isset($_GET['msg']) && isset($_GET['success'])){
                    $msg = $_GET['msg'];
                    if( $_GET['success'] == 'true'){
                        echo "<span class='alert alert-success'>{$msg}</span>";
                    }else{
                        echo "<span class='alert alert-danger'>{$msg}</span>";
                    }
                }
            ?>
            <div class="apply-section-wrap">
                <h3>Apply for - <?php echo $jobsDetails['title']; ?></h3>
                <form action="functions.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="operation" value="apply-job">
                    <input type="hidden" name="job-id" value="<?php echo $jobsDetails['id']; ?>">
                    <div class="application-field">
                        <label for="application-name">Applicant's Name</label>
                        <input type="text" name="application-name" id="application-name" placeholder="Your full name">
                    </div>
                    <div class="application-field">
                        <label for="application-email">Applicant's Email</label>
                        <input type="text" name="application-email" id="application-email" value="Lorem ipsum dolor sit amet.">
                    </div>

                    <div class="application-field">
                        <label for="application-resume">Applicant's Resume (PDF Format)</label>
                        <input type="file" name="application-resume" id="application-resume" accept=".pdf">
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