<?php
if(!isset($_SESSION)){
    session_start();
}

require("functions.php");


$applicationsOfApplicant = Application::getApplicationsByEmail($_SESSION['email']);


?>
<!-- All job start -->
    <div class="main-content-wrap">
        <div class="dashboard-heading-wrap">
            <h3>Applications of - <?php echo $_SESSION['email']; ?></h3>
        </div>
        <div class="all-jobs-wrap">
            <?php if(count($applicationsOfApplicant) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Job</td>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($applicationsOfApplicant as $application): ?> 
                        <tr>
                            <td><?php echo $application['name']; ?></td>
                            <td><?php echo $application['email']; ?></td>
                            <td><?php echo Jobs::getJobDetails($application['job_id'])[0]['title']; ?></td>
                            <!-- <td><a href="/job-board/applications/<?php echo $application['cv']; ?>" download>Download CV</a></td>  -->
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