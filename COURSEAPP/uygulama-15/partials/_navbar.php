
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="index.php" class="navbar-brand">CourseApp</a>
        
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a href="admin-categories.php" class="nav-link">Admin Categories</a>
            </li>
            <li class="nav-item">
                <a href="admin-courses.php" class="nav-link">Admin Courses</a>
            </li>
        </ul>

        <ul class="navbar-nav me-2">

            <?php if(isset($_COOKIE["username"])): ?>
            
            
           <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">Hoş Geldiniz, <?php echo $_COOKIE["username"]?></a>
            </li>
            <?php else: ?>

            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
            </li>
            <?php endif ;?>
        </ul>

        <form action="courses.php" class="d-flex" method="get">
            <input type="text" name='q' class="form-control me-2" placeholder="Keyword">
            <button type="submit" class="btn btn-outline-warning">Ara</button>
        </form>
    </div>
</nav>