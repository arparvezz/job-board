<?php
if(!isset($_SESSION)){
    session_start();
}
$jobId = 1;

if(isset($_GET['job-id'])){
   $jobId = $_GET['job-id'];
}

require("functions.php");
$jobsDetails = Jobs::getJobDetails($jobId)[0];


print_r($jobsDetails);

?>
<!-- Edit job -->
<div class="main-content-wrap">
    <div class="dashboard-heading-wrap">
        <h3>Edit Job</h3>
    </div>
    <div class="add-job-form">
        <form action="">
            <div class="dashboard-form-item">
                <div class="job-thumbs-section">
                    <div class="job-thumbs-section-prev">
                        <div class="prev-thumb-preview" data-img="<?php echo $jobsDetails['thumbnail']; ?>" style="background-image:url('./imgs/<?php echo $jobsDetails['thumbnail']; ?>')">
                            <span>X</span>
                        </div>
                    </div>
                    <div class="job-thumbs-section-nex">
                        <label for="job-thumb">Select New Thumbnail</label>
                        <input class="new-job-thumb" type="file" name="job-thumb" id="job-thumb">
                    </div>
                </div>
                
                
            </div>
            <div class="dashboard-form-item">
                <label for="job-title">Title</label>
                
                <input type="text" name="job-title" id="job-title" value="<?php echo $jobsDetails['title']; ?>">
            </div>
            <div class="dashboard-form-item">
                <label for="job-category">Category</label>
                <select class="edit-job-category" name="job-category" id="job-category" data-val="<?php echo $jobsDetails['category']; ?>">
                    <option value="web-design">Web Design</option>
                    <option value="graphic-design">Graphic Design</option>
                    <option value="digital-marketing">Digital Marketing</option>
                </select>
            </div>
            <div class="dashboard-form-item">
                <label for="job-description">Description</label>
                <textarea rows="4" name="job-description" id="job-description"><?php echo $jobsDetails['description']; ?></textarea>
            </div>
            
            <div class="dashboard-form-item">
                <button class="btn btn-primary" type="submit">Update Job</button>
            </div>
        </form>
    </div>
</div>