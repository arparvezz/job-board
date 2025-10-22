<!-- add new job start -->
<div class="main-content-wrap">
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
    <div class="dashboard-heading-wrap">
        <h3>Add New Job</h3>
    </div>
    <div class="add-job-form">
        <form action="functions.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="operation" value="add-new-job">
            <div class="dashboard-form-item">
                <label for="job-thumb">Select Thumbnail</label>
                <input type="file" name="job-thumb" id="job-thumb">
            </div>
            <div class="dashboard-form-item">
                <label for="job-title">Title</label>
                <input type="text" name="job-title" id="job-title">
            </div>
            <div class="dashboard-form-item">
                <label for="job-category">Category</label>
                <select name="job-category" id="job-category">
                    <option value="web-design">Web Design</option>
                    <option value="graphic-design">Graphic Design</option>
                    <option value="digital-marketing">Digital Marketing</option>
                </select>
            </div>
            <div class="dashboard-form-item">
                <label for="job-description">Description</label>
                <textarea rows="4" name="job-description" id="job-description"></textarea>
            </div>
            
            <div class="dashboard-form-item">
                <button class="btn btn-primary" type="submit">Add New Job</button>
            </div>
        </form>
    </div>
</div>
<!-- add new job end -->