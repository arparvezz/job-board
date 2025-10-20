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
                    <a href="/index.html">Job Board <span class="user-badge">Manager</span></a>
                </div>
                <div class="dashboard-nav-links">
                    <ul>
                        <li><a href="/index.html">Home</a></li>
                        <li><a href="/all-jobs.html">All Jobs</a></li>
                        <li><a href="/login.html">Add New Job</a></li>
                        <li><a href="/login.html">Edit Job</a></li>
                        <li><a href="/login.html">My Account </a></li>
                    </ul>
                </div>
                <div class="dashboard-logout-wrap">
                    <a href="/login.html">Logout</a>
                </div>
            </div>
            <div class="sidebar-overlay"></div>
        </aside>
        <main>

            <!-- All job -->
            <div class="main-content-wrap">
                <div class="dashboard-heading-wrap">
                    <h3>All Jobs</h3>
                </div>
                <div class="all-jobs-wrap">
                    <table>
                        <thead>
                            <tr>
                                <td>Thumbnail</td>
                                <td>Title</td>
                                <td>Category</td>
                                <td>Description</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="./imgs/web-design.jpg" alt=""></td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td>Web Design</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quod veritatis labore vitae non sunt hic harum placeat qui animi, asperiores molestias. Eius, adipisci. Ipsam.</td>
                                <td><a class="table-link" href="#">Edit Post</a> <a class="table-link table-link-danger" href="#">Delete Post</a></td>
                            </tr>
                            <tr>
                                <td><img src="./imgs/web-design.jpg" alt=""></td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td>Web Design</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quod veritatis labore vitae non sunt hic harum placeat qui animi, asperiores molestias. Eius, adipisci. Ipsam.</td>
                                <td><a class="table-link" href="#">Edit Post</a> <a class="table-link table-link-danger" href="#">Delete Post</a></td>
                            </tr>
                            <tr>
                                <td><img src="./imgs/web-design.jpg" alt=""></td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td>Web Design</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quod veritatis labore vitae non sunt hic harum placeat qui animi, asperiores molestias. Eius, adipisci. Ipsam.</td>
                                <td><a class="table-link" href="#">Edit Post</a> <a class="table-link table-link-danger" href="#">Delete Post</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- add new job -->
            <div class="main-content-wrap">
                <div class="dashboard-heading-wrap">
                    <h3>Add New Job</h3>
                </div>
                <div class="add-job-form">
                    <form action="">
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

            <!-- Edit Profile -->
            <div class="main-content-wrap">
                <div class="dashboard-heading-wrap">
                    <h3>My Profile</h3>
                </div>
                <div class="add-job-form">
                    <form action="">
                        <div class="dashboard-form-item">
                            <label for="profile-email">Email</label>
                            <input type="text" name="profile-email" id="profile-email" value="Lorem ipsum dolor sit amet.">
                        </div>

                        <div class="dashboard-form-item">
                            <label for="profile-password">Password</label>
                            <input type="text" name="profile-password" id="profile-password" value="Lorem ipsum dolor sit amet.">
                        </div>
                       
                        
                        <div class="dashboard-form-item">
                            <button class="btn btn-primary" type="submit">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>

            
        </main>
    </section>
    
    <script src="./dist/script.js"></script>
</body>
</html>