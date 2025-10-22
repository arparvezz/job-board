<?php
include "./db.php";

// get current user data based on session user id;
$currentUserInfo = User::getUserInfo($_SESSION['userId']);
$msg = "";

if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
}

if(isset($_GET['success']) && $_GET['success'] == 'true'){
    $alertClass = 'success';
}else{
  $alertClass = 'danger';  
}
?>
<!-- Edit Profile -->
<div class="main-content-wrap">
    <div class="dashboard-heading-wrap">
        <h3>My Profile</h3>
        <?php
            if($msg != ""){
                echo "<span class='alert alert-{$alertClass}'>{$msg}</span>";
            }
        ?>
    </div>
    <div class="add-job-form">
        <form action="functions.php" method="POST">
            <input type="hidden" name="operation" value="user-info-update">
            <input type="hidden" name="profile-id" value="<?php echo $currentUserInfo['id']; ?>">
            <div class="dashboard-form-item">
                <label for="profile-name">name</label>
                <input type="text" name="profile-name" id="profile-name" value="<?php echo $currentUserInfo['name']; ?>">
            </div>
            <div class="dashboard-form-item">
                <label for="profile-email">Email</label>
                <input type="text" name="profile-email" id="profile-email" value="<?php echo $currentUserInfo['email']; ?>">
            </div>

            <div class="dashboard-form-item">
                <label for="profile-password">Password</label>
                <input type="text" name="profile-password" id="profile-password" value="<?php echo $currentUserInfo['password']; ?>">
            </div>
            
            
            <div class="dashboard-form-item">
                <button class="btn btn-primary" type="submit">Update Profile</button>
            </div>
        </form>
    </div>
</div>