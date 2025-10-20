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
