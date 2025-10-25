<?php
    require("functions.php");
    $allJobs = Jobs::allJobs();

    // echo $_SESSION['userId'];
    // echo "<pre>";
    // print_r($allJobs);
    // echo "</pre>";
?>
<!-- All job start -->
    <div class="main-content-wrap">
        <div class="dashboard-heading-wrap">
            <h3>All Jobs</h3>
        </div>
        <div class="all-jobs-wrap">
            <table>
                <thead>
                    <tr>
                        <td>Thumbnail</td>
                        <td>Title</td>
                        <td>Category</td>
                        <td>Description</td>
                        <td>Applications</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        foreach($allJobs as $job):
                    ?>
                        <tr>
                            <td><img src="./imgs/<?php echo $job['thumbnail']; ?>" alt=""></td>
                            <td><a href="/job-board/job-details.php?job-id=<?php echo$job['id'];?>"><?php echo $job['title']; ?></a></td>
                            <td><?php echo$job['category'];?></td>
                            <td><p><?php echo truncatewords($job['description'],15); ?></p></td>
                            <?php if($_SESSION['userId'] == $job['posted_by']): ?>
                            <td><a href="/job-board/dashboard.php?content=applications&job-id=<?php echo $job['id']; ?>">
                                <?php echo count(Application::getApplications($job['id'])); ?>
                            </a></td>
                            <td>
                                <a class="table-link" href="/job-board/dashboard.php?content=edit-job&job-id=<?php echo $job['id']; ?>">Edit Post</a>
                                <button class="table-link table-link-danger post-delete-button" data-deleteUrl="/job-board/functions.php?content=delete-job&job-id=<?php echo $job['id']; ?>">Delete Post</button>
                            </td>
                            <?php endif; ?>

                        </tr>
                    <?php
                        endforeach;
                    ?>

                </tbody>
            </table>
        </div>
    </div>
<!-- All job end -->