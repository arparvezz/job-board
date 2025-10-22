<?php
if(!isset($_SESSION)){
    session_start();
}
$postId = 1;

if(isset($_GET['job-id'])){
   $postId = $_GET['job-id'];
}

require("functions.php");
$jobsDetails = Jobs::getJobDetails($postId)[0];


// print_r($jobsDetails);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Job board</title>
    <link rel="stylesheet" href="./dist/style.css">
    <link rel="stylesheet" href="./dist/job-details.css">
</head>
<body>
    <?php
        require("./components/header.php");
    ?>




    <!-- Jobs section start -->
    <section class="job-details">
        <div class="container">
            <div class="job-details-wrap">
                <h3><?php echo $jobsDetails['title']; ?></h3>
                <div class="job-details-thumb">
                    <img src="./imgs/<?php echo $jobsDetails['thumbnail']; ?>" alt="job-details-thumb">
                </div>
                <p><?php echo $jobsDetails['description']; ?></p>
                <a class="btn btn-primary" href="/job-board/apply.php?job-id=<?php echo $jobsDetails['id']; ?>">Apply This Job Now</a>
            </div>
        </div>
    </section>
    <!-- Jobs section end -->

    <?php
        require("./components/footer.php");
    ?>
    
</body>
</html>