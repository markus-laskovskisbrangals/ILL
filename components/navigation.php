<div class="menu-bar">
        <ul class="menu-itams">
            <li><a href="index.php">Sākums</a></li>
            <li><a href="#">Forums</a></li>
            <li><a href="about.php">Par forumu</a></li>
            <!--<li><input type="text" placeholder="Meklēt..."><button><i class="fa-solid fa-magnifying-glass"></i></button></li>-->
        </ul>
        <?php if (!isset($_SESSION['is-logged-in'])): ?>
        <ul class="user-options">
            <li><a href="login.php">Ienākt</a></li>
            <li><a href="register.php" class="accent-link">Reģistrēties</a></li>
        </ul>
        <?php else: ?>
        <ul class="user-option">
            <li><p>Labdien, <?php echo $_SESSION['username']; ?>!</p></li>
            <li><a href="">Profils</a></li>
            <li><a href="logout.php" class="accent-link">Iziet</a></li>
        </ul>
        <?php endif; ?>
    </div>