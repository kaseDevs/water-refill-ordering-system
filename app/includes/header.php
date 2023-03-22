    <header class="header" id="header">
        <div class="navbar">
            <div class="logo">
                <!-- <img src="img/logo1.png"> -->
                <a style="text-decoration: none;" href="<?php echo BASE_URL . '/index.php' ?>">
                <h1>Refill<img src="img/water/drop.png" width="50px" height="35px" alt="logo" /><span>Drops</span></h1>
                </a>
            </div>
            <a href="viewCart.php"><span class="material-symbols-outlined navbar-cart">
                shopping_cart
                </span></a>
            <nav class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li><a href="index.php" class="nav-link active">home</a></li>
                    <li><a href="https://kasedevs.co.ke" class="nav-link">kasedevs</a></li>
                    <li><a href="viewCart.php"><span class="material-symbols-outlined nav-cart">
                    shopping_cart
                    </span></a></li>
                     <?php if (isset($_SESSION['id'])): ?>
                    <li><a class="nav-link" href="#"><i class="fa fa-user"></i><?php echo $_SESSION['username']; ?></a>
                    <?php if($_SESSION['admin']): ?>
                    <li><a class="nav-link" href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
                    <?php endif; ?>
                    <li><a style="color: red;"  class="nav-link" href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
                    </li>
                    <?php else: ?>
                    <li><a class="nav-link" href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
                    <?php endif; ?>
                    <!-- <li><a href="#package" class="nav-link">Research</a></li> -->
                    <!-- <li><a href="#gallery" class="nav-link">gallery</a></li>
                    <li><a href="#contact" class="nav-link">contact</a></li> -->
                </ul>
            </nav>
            <div class="nav-toggle" id="nav-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>