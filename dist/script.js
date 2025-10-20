let sidebarToggleBtn = document.querySelector(".sidebar-toggle");
let sidebar = document.querySelector("aside");

sidebarToggleBtn.addEventListener("click",function(e){
    e.preventDefault();
    sidebar.style.display = 'unset';
});

sidebar.addEventListener("click",function(e){
    e.preventDefault();
    sidebar.style.display = 'none';
});
