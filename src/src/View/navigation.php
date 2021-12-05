<nav class="navtop">
    <div>
        <a href='/'><h1>Project Php</h1></a>
        <?php
        if (isset($_SESSION['loggedin'])) {
            ?>
        <a href="/?p=profile"><i class="fas fa-user-circle"></i>Profile</a>
        <a href="/?p=logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
        <?php }else{ ?>
        <a href="/?p=login"><i class="fas fa-user-circle"></i>Login</a>
        <?php } ?>
    </div>
</nav>