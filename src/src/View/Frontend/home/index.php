<section class='loggedin'>
	<div class="content">
		<h2>Home Page</h2>
		<?php if (isset($_SESSION['loggedin'])) {?>
		<p>Welcome back, <?=$_SESSION['name']?>!</p>
		 <?php }else { ?>
		<p>Hello! Already member? <a href='/?p=login'>logged in</a> or <a href='/?p=signup'>sign up</a></p>
		<?php } ?>
	</div>
</section>