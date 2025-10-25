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

$applications = Application::getApplications($jobId);

?>
<!-- All job start -->
    <div class="main-content-wrap">
        <div class="dashboard-heading-wrap">
            <h3>Applications of - <?php echo $jobsDetails['title']; ?></h3>
        </div>
        <div class="all-jobs-wrap">
            <?php if(count($applications) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>CV</td>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($applications as $application): ?>
                        <tr>
                            <td><?php echo $application['name']; ?></td>
                            <td><?php echo $application['email']; ?></td>
                            <td><a href="/job-board/applications/<?php echo $application['cv']; ?>" download>Download CV</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
                <p>No application found!</p>
            <?php endif; ?>



        </div>
    </div>
<!-- All job end -->