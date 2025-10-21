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
                        <div class="prev-thumb-preview">
                            <span>X</span>
                        </div>
                    </div>
                    <div class="job-thumbs-section-nex">
                        <label for="job-thumb">Select New Thumbnail</label>
                        <input type="file" name="job-thumb" id="job-thumb">
                    </div>
                </div>
                
                
            </div>
            <div class="dashboard-form-item">
                <label for="job-title">Title</label>
                
                <input type="text" name="job-title" id="job-title" value="Lorem ipsum dolor sit amet.">
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
                <textarea rows="4" name="job-description" id="job-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae cum similique sit ipsam itaque! Accusantium nobis odio vitae quis explicabo?</textarea>
            </div>
            
            <div class="dashboard-form-item">
                <button class="btn btn-primary" type="submit">Update Job</button>
            </div>
        </form>
    </div>
</div>