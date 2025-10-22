<?php
    require("functions.php");
    $allJobs = Jobs::allJobs();
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
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        foreach($allJobs as $job):
                    ?>
                        <tr>
                            <td><img src="./imgs/<?php echo $job['thumbnail']; ?>" alt=""></td>
                            <td><a href="/job-board/job-details.php?post-id=<?php echo$job['id'];?>"><?php echo $job['title']; ?></a></td>
                            <td>Web Design</td>
                            <td><p><?php echo truncatewords($job['description'],15); ?></p></td>
                            <td><a class="table-link" href="#">Edit Post</a> <a class="table-link table-link-danger" href="#">Delete Post</a></td>
                        </tr>
                    <?php
                        endforeach;
                    ?>

                </tbody>
            </table>
        </div>
    </div>
<!-- All job end -->