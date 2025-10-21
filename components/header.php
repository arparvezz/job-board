<?php
session_start();
$user = null;
if(isset($_SESSION['user'])){
    if($_SESSION['user'] == "manager" || $_SESSION['user'] == "applicant"){
        $user = $_SESSION['user'];
    }
}
?>
<!-- header section start -->
    <header>
        <div class="container">
            <div class="navbar">
                <div class="navbar-brand">
                    <a href="/job-board/index.php">Job Board</a>
                </div>
                <div class="nav-links">
                    <ul>
                        <li><a href="/job-board/index.php">Home</a></li>
                        <li><a href="/job-board/all-jobs.php">All Jobs</a></li>
                        <?php if($user == "manager" || $user == "applicant"){ ?>
                            <li><a href="/job-board/dashboard.php">Dashboard</a></li>
                        <?php }else{ ?>
                            <li><a href="/job-board/login.php">Login</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
<!-- header section end -->