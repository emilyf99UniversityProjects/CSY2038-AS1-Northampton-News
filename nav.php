<?php
	require 'databaseJoin.php';
?>
<nav>
			<ul>
				<li><a href="index.php">Latest Articles</a></li>
				<li><a href="#">Select Category</a>
					<ul>

						<?php 
							$results = $pdo->query('SELECT * FROM category');

							foreach ($results as $row) {
								echo '<li><a class="articleLink" href="categoryPages.php?categoryId=' . $row['name'] . '">' . $row['name'] .'</a></li>';
							}
						?>
					</ul>
					<li><a class="articleLink" href="register.php">Register </a></li>
					<li><a class="articleLink" href="login.php">Log in </a></li>
					<?php 
					if(isset($_SESSION['loggedin']))  {
						echo '<li><a class="articleLink" href="logout.php">Log Out</a></li>';
						echo '<li>Welcome Back</li>';
					}

					if(isset($_SESSION['adminloggedin'])){
						echo '<li><a class="articleLink" href="logout.php">Log Out</a></li>';
						echo '<li><a class="articleLink" href="adminArticles.php"> Admin Hub</a></li>';
						echo '<li>Welcome Back Admin</li>';

					} ?>
				</li>
			</ul>
		</nav>
		<img src="images\banners\randombanner.php" alt = "a banner image that changes"/>
		<main>