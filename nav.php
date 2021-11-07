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
								echo '<li><a class="articleLink" href="#">' . $row['name'] . '</a></li>';
							}
						?>
					</ul>
					<li><a class="articleLink" href="register.php">Register </a></li>
					<li><a class="articleLink" href="login.php">Log in </a></li>
				</li>
			</ul>
		</nav>
		<img src="images\banners\randombanner.php" alt = "a banner image that changes"/>
		<main>