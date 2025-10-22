<div class="job-card">
    <div class="job-thumb">
        <a class="job-link" href="/job-board/job-details.php?job-id=<?php echo$job['id'];?>">
            <span class="job-category"><?php echo$job['category']; ?></span>
            <img class="job-thumbnail" src="./imgs/<?php echo $job['thumbnail']; ?>" alt="">
        </a>
    </div>
    <div class="job-content">
        <a class="job-title" href="/job-board/job-details.php?job-id=<?php echo$job['id'];?>"><?php echo $job['title']; ?></a>
        <p class="job-description"><?php echo truncatewords($job['description'],15); ?></p>
        <a class="btn" href="/job-board/job-details.php?job-id=<?php echo$job['id'];?>">Show Details</a>
    </div>
</div>