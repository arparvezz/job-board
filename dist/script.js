let sidebarToggleBtn = document.querySelector(".sidebar-toggle");
let sidebar = document.querySelector(".sidebar");
let sidebarOverlay = document.querySelector(".sidebar-overlay");

sidebarToggleBtn.addEventListener("click",function(e){
    e.preventDefault();
    sidebar.style.display = 'unset';
});

sidebarOverlay.addEventListener("click",function(e){
    e.preventDefault();
    sidebar.style.display = 'none';
});


// =====================
// Edit Job Options
// =====================

// Select the Job category in the dashboard
let editJobCategory = document.querySelector(".edit-job-category");
if(editJobCategory != null){
    let jobCategoryDefaultValue = editJobCategory.dataset.val;
    editJobCategory.querySelectorAll('option').forEach(el => {
        if(el.value == jobCategoryDefaultValue){
            el.setAttribute('selected',true);
        }
    })
}




// hide the previous thumbnail preview when clicking the cross button
let prevThumbPreview = document.querySelector(".prev-thumb-preview");
if(prevThumbPreview != null){
    prevThumbPreview.querySelector('span').addEventListener('click',function(e){
        this.parentElement.style.display = "none";
        document.querySelector('.new-job-thumb').value = null;
    })
}



// show thumbnail again when uploading new thumbnail
let newThumbUploader = document.querySelector('.new-job-thumb');
if(newThumbUploader != null){
    newThumbUploader.addEventListener('change',function(e){
        let fileLink = e.target.files[0];
        prevThumbPreview.style.backgroundImage = `url(${URL.createObjectURL(fileLink)})`;
        prevThumbPreview.style.display = "block";
    })
}




// Delete job post after showing an alert 

let deleteJobBtns = document.querySelectorAll('.post-delete-button');

deleteJobBtns.forEach(singleBtn => {
    singleBtn.addEventListener('click',function(event){
        let consent = confirm("Are you sure to delete this post?");
        if(consent){
            window.location.href = event.target.dataset.deleteurl;
        }
    })
})