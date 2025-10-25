<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['user'])){
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Job board</title>
    <link rel="stylesheet" href="./dist/style.css">
    <link rel="stylesheet" href="./dist/dashboard.css">
</head>
<body>
    
    <section class="main-section">
        <button class="sidebar-toggle btn btn-primary">Sidebar</button>
        <aside class="sidebar">
            <div class="sidebar-wrap">
                <div class="dashboard-logo-wrap">
                    <a href="/job-board/index.php">Job Board <span class="user-badge"><?php echo $_SESSION['user']; ?></span></a>
                </div>
                <div class="dashboard-nav-links">
                    <ul>
                        <li><a href="/job-board/index.php">Home</a></li>
                        <?php if($_SESSION['user'] == "manager"){ ?>
                            <li><a href="/job-board/dashboard.php?content=all-jobs">All Jobs</a></li>
                            <li><a href="/job-board/dashboard.php?content=add-new-job">Add New Job</a></li>
                            <!-- <li><a href="/job-board/dashboard.php?content=edit-job">Edit Job</a></li> -->
                        <?php } ?>
                        <li><a href="/job-board/dashboard.php?content=my-account">My Account </a></li>
                    </ul>
                </div>
                <div class="dashboard-logout-wrap">
                    <form action="functions.php" method="POST">
                        <input type="hidden" name="operation" value="user-logout">
                        <button class="dashboard-logout-btn" type="submit">Logout</button>
                    </form>
                </div>
            </div>
            <div class="sidebar-overlay"></div>
        </aside>
        <main>

            <!-- show if user is manager -->
            <?php
                if((isset($_GET['content']) && $_GET['content'] == "all-jobs") || (!isset($_GET["content"]) && $_SESSION['user'] == 'manager')){
                    include "./components/all-jobs.php";
                }
            ?>

            <!-- show if user is manager -->
            <?php
                if(isset($_GET['content']) && $_GET['content'] == "add-new-job" ){
                    include "./components/add-new-job.php";
                }
            ?>

            <!-- show if user is manager -->
            <?php
                if(isset($_GET['content']) && $_GET['content'] == "edit-job" ){
                    include "./components/edit-job.php";
                }
            ?>

            <?php
                if(isset($_GET['content']) && $_GET['content'] == "applications" ){
                    include "./components/applications.php";
                }
            ?>

            <?php
                if(isset($_GET['content']) && $_GET['content'] == "my-account" ){
                    include "./components/my-account.php";
                }
            ?>

            

            

            

            
        </main>
    </section>
    
    <script src="./dist/script.js"></script>
</body>
</html>