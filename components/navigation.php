<div class="menu-bar">
        <ul class="menu-itams">
            <li><a href="index.php">Home</a></li>
            <li><a href="forum.php">Forum</a></li>
            <!--<li><input type="text" placeholder="Meklēt..."><button><i class="fa-solid fa-magnifying-glass"></i></button></li>-->
        </ul>
        <?php if (!isset($_SESSION['is-logged-in'])): ?>
        <ul class="user-options">
            <li><a href="login.php">Log In</a></li>
            <li><a href="register.php" class="accent-link">Sign Up</a></li>
        </ul>
        <?php else: ?>
        <ul class="user-option">
            <li><p>Greetings, <?php echo $_SESSION['username']; ?>!</p></li>
            <li><a href="profile.php?profileid=<?php echo $_SESSION['user-id']; ?>">Profile</a></li>
            <li><a href="logout.php" class="accent-link">Log Out</a></li>
        </ul>
        <?php endif; ?>
    </div>